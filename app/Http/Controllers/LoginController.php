<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login()
    {
        // Logika untuk halaman login
        return view('login'); // Contoh nama tampilan login.blade.php
    }

    public function loginproses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required'  => 'Password wajib diisi',
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->email_verified_at != null) {
                if (Auth::user()->role === 'admin') {
                    return redirect()->route('admin')->with('suscces', 'halo admin, anda berhasil login');
                } else if (Auth::user()->role === 'user') {
                    return redirect()->route('user')->with('succes', 'Berhasil login');
                }
            } else {
                Auth::logout();
                return redirect()->route('login')->withErrors('akun anda belum di verifikasi, harap verifikasi terlebih dahulu');
            }
            return "login sukses";
        } else {
            return redirect('login')->withErrors('Email atau password salah');
        }
    }
    public function register()
    {
        // Logika untuk halaman registrasi
        return view('register'); // Pastikan tampilan register.blade.php ada di direktori 'resources/views'
    }
    public function registeruser(Request $request)
    {
        $str = Str::random(100);
        $request->validate([
            'name' => 'required |min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required |min:6',
        ], [
            'name.required' => ' nama wajib diisi',
            'email.required ' => 'email wajib diisi',
            'email.unique' => 'email ini telah terdaftar',
            'password.required' => 'password wajib diisi',
            'password.min' => 'password minimal 6 karakter',
        ]);

        $inforegister = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'verify_key' => $str
        ];
        User::create($inforegister);

        $details = [
            'name' => $inforegister['name'],
            'role' => 'user',
            'datetime' => date('Y-m-d H:i:s'),
            'website' => 'laravel- daftar member rental mobil',
            'url' => 'http://' . request()->getHttpHost() . "/" . "verify/" . $inforegister['verify_key']
        ];

        Mail::to($inforegister['email'])->send(new AuthMail($details));

        return redirect()->route('login')->with('success', 'link verifikasi telah dikirim ke email anda. cek email untuk verifikasi');
    }
    function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)->update(['email_verified_at' => date('Y-m-d H:i:s')]);

            return redirect()->route('login')->with('success', 'verifikasi berhasil. akun anda telah aktif');
        } else {
            return redirect()->route('login')->withErrors('keys tidak valid. pastikan anda telah melakukan registrasi')->withInput();
        }
    }
}
