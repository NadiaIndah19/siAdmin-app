<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SIUP extends Model
{
    use HasFactory;
    protected $table = 'siup';
    protected $fillable = [
        'nama',
        'nik',
        'judul_siup',
        'jenis_siup',
        'lokasi_siup',
        'lampiran',
        'deskripsi'
    ];

    
}
