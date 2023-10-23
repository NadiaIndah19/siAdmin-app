<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktaPernikahan extends Model
{
    use HasFactory;
    protected $table ='akta_pernikahans';
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir'
    ];
}
