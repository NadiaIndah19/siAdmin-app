<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kk', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('ttl');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('gol_darah');
            $table->string('pendidikan');
            $table->string('status_hub_keluarga');
            $table->string('status_perkawinan');
            $table->date('tgl_perkawinan')->nullable();
            $table->string('kewarganegaraan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('file_pengantar_rt');
            $table->string('file_buku_nikah');
            $table->string('file_kk_lama');
            $table->string('file_ktp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kk');
    }
};
