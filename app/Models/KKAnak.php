<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KKAnak extends Model
{
    use HasFactory;
    protected $table = 'kk_anaks';
    protected $fillable = [
        'kk_id',
        'nik',
        'nama',
        'ttl',
        'agama',
        'jenis_kelamin',
        'pekerjaan',
        'gol_darah',
        'pendidikan',
        'status_hub_keluarga',
        'status_perkawinan',
        'tgl_perkawinan',
        'kewarganegaraan',
        'file_pengantar_rt',
        'file_buku_nikah',
        'file_kk_lama',
        'file_ktp',
    ];


 
    public function kk()
    {
        return $this->belongsTo(KK::class, 'kk_id', 'id');
    }
}
