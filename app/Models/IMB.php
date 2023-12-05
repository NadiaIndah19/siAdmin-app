<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMB extends Model
{
    use HasFactory;
    protected $table = 'imb';
    protected $fillable = [
        'nama',
        'nik',
        'no_hp',
        'address',
        'loc_bangunan',
        'tipe_bangunan',
        'luas_bangunan',
        'tgl_pengajuan',
        'tgl_persetujuan',
        'tgl_penolakan',
        'tgl_selesai'
    ];

    
}
