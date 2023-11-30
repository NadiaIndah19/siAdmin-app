<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KK extends Model
{
    use HasFactory;
    protected $table = 'kk';
    protected $fillable = [
        'nik',
        'nama',
        'kota_kelahiran',
        'tanggal_lahir',
        'jenis_kelamin',
        'gol_darah',
        'alamat',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'file_kk'
    ];
}
