<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAkses;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// grub yang bisa di akses tanpa perlu login 
Route::middleware(['guest'])->group(function () {
    Route::view('/', 'landingpage');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
    // untuk menangkap verify 
    Route::get('/verify/{verify_key}', [LoginController::class, 'verify']);
});


Route::middleware(['auth'])->group(function () {
    Route::redirect('/home', '/user');

    //admin kontroller 
    Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('UserAkses:admin');
    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('UserAkses:user');

    // MobilController
    Route::get('/mobil', [MobilController::class, 'index'])->name('mobil');

    Route::get('/tambahmobil', [MobilController::class, 'tambahmobil'])->name('tambahmobil');

    //untuk insert ke database
    Route::post('/insertdata', [MobilController::class, 'insertdata'])->name('insertdata');

    Route::get('/tampilkandata/{id_mobil}', [MobilController::class, 'tampilkandata'])->name('tampilkandata');

    //jika akan menginputkan sesuatu, pakai POST
    Route::post('/updatedata/{id_mobil}', [MobilController::class, 'updatedata'])->name('updatedata');

    Route::get('/delete/{id_mobil}', [MobilController::class, 'delete'])->name('delete');

    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');

    Route::get('/tambahpegawai', [PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');

    //untuk insert ke database
    Route::post('/insertdatapegawai', [PegawaiController::class, 'insertdata'])->name('insertdatapegawai');

    Route::get('/tampilkandatapegawai/{id_pegawai}', [PegawaiController::class, 'tampilkandata'])->name('tampilkandatapegawai');

    //jika akan menginputkan sesuatu, pakai POST
    Route::post('/updatedatapegawai/{id_pegawai}', [PegawaiController::class, 'updatedata'])->name('updatedatapegawai');

    Route::get('/deletepegawai/{id_pegawai}', [PegawaiController::class, 'delete'])->name('deletepegawai');
    Route::get('/detailmobil/{id_mobil}', [MobilController::class, 'show'])->name('detailmobil');
});
