<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = [
        'id_pegawai',
        'nama',
        'nik',
        'alamat',
        'no_telepon',
        'tanggal_bekerja',
    ];
}
