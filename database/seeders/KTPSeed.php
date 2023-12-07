<?php

namespace Database\Seeders;

use App\Models\KTP;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KTPSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KTP::insert(array(
            [
                'nik' => '123',
                'nama' => 'sybanul islam',
                'kota_kelahiran' => 'surabaya',
                'tanggal_lahir' => Carbon::parse(now())->format('Y-m-d'),
                'jenis_kelamin' => 'Laki-Laki',
                'gol_darah' => 'A', 
                'alamat' => 'kediri',
                'agama' => 'Islam',
                'status_perkawinan' => 'Sudah Kawin',
                'pekerjaan' => 'singer',
                'file_kk' => ' '
            ]
        ));
    }
}
