<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaduan::insert(array(
            [
                'nama' => 'Nardi',
                'nik' => '123123123',
                'judul_pengaduan' => 'ambulance kecamatan',
                'jenis_pengaduan' => 'Pendidikan',
                'lokasi_pengaduan' => 'kediri',
                'lampiran' =>' ',
                'deskripsi' => 'tidak ada'
            ]
            ));
    }
}
