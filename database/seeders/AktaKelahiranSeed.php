<?php

namespace Database\Seeders;

use App\Models\AktaKelahiran;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AktaKelahiranSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AktaKelahiran::insert(array(
            [
                'nomor_kk' => '123456789101213',
                'nama_kepala_keluarga' => 'Mursidan',
                'nama_lengkap_anak' => 'Nadia Indah',
                'tempat_lahir' => 'Rumah',
                'tempat_lahir_anak' => 'Tuban',
                'tanggal_lahir_anak' => Carbon::parse(now())->format('Y-m-d'),
                'jenis_dilahirkan' => 'Tunggal',
                'nomor_kelahiran' => '1',
                'nomor_anak' => '1',
                'penolong_kelahiran' => 'Suster',
                'nik_ayah' => '123456789101213',
                'nik_ibu' => '123456789101213',
                'nama_ayah' => 'Mursidan',
                'nama_ibu' => "Siti",
                'tanggal_kelahiran_ayah' => Carbon::parse(now())->format('Y-m-d'),
                'tanggal_kelahiran_ibu' => Carbon::parse(now())->format('Y-m-d'),
                'pekerjaan_ayah' => 'Dokter',
                'pekerjaan_ibu' => 'Dokter',
                'kewarganegaraan_ayah' => 'WNI',
                'kewarganegaraan_ibu' => 'WNI',
                'alamat' => 'Tuban',
                'tanggal_perkawinan' => Carbon::parse(now())->format('Y-m-d'),
                'file_rs' => ' ',
                'file_kk' => ' ',
                'file_ktp' => ' ',
                'file_buku_nikah' => ' ',
                'jenis_kelamin' => 'Laki-Laki',
                'pukul_kelahiran' => "09:00"
            ],
            [
                'nomor_kk' => '123456789101213',
                'nama_kepala_keluarga' => 'Mursidan',
                'nama_lengkap_anak' => 'Nadia Indah',
                'tempat_lahir' => 'Rumah',
                'tempat_lahir_anak' => 'Tuban',
                'tanggal_lahir_anak' => Carbon::parse(now())->format('Y-m-d'),
                'jenis_dilahirkan' => 'Tunggal',
                'nomor_kelahiran' => '1',
                'nomor_anak' => '1',
                'penolong_kelahiran' => 'Suster',
                'nik_ayah' => '123456789101213',
                'nik_ibu' => '123456789101213',
                'nama_ayah' => 'Mursidan',
                'nama_ibu' => "Siti",
                'tanggal_kelahiran_ayah' => Carbon::parse(now())->format('Y-m-d'),
                'tanggal_kelahiran_ibu' => Carbon::parse(now())->format('Y-m-d'),
                'pekerjaan_ayah' => 'Dokter',
                'pekerjaan_ibu' => 'Dokter',
                'kewarganegaraan_ayah' => 'WNI',
                'kewarganegaraan_ibu' => 'WNI',
                'alamat' => 'Tuban',
                'tanggal_perkawinan' => Carbon::parse(now())->format('Y-m-d'),
                'file_rs' => ' ',
                'file_kk' => ' ',
                'file_ktp' => ' ',
                'file_buku_nikah' => ' ',
                'jenis_kelamin' => 'Laki-Laki',
                'pukul_kelahiran' => "09:00"
            ],

        ));
    }
}
