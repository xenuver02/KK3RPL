<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_percobaan', function (Blueprint $table){
            $table->integer('NIS');
            $table->integer('NISN');
            $table->integer('NIK');
            $table->integer('nomor_telfon');
            $table->string('nama_lengkap',100);
            $table->string('email',50);
            $table->string('tempat_lahir',100);
            $table->integer('tanggal_lahir');
            $table->string('golongan_darah',5);
            $table->string('jenis_kelamin',1);
            $table->string('agama',10);
            $table->string('pekerjaan',50);
            $table->string('kabupaten/kota',50);
            $table->string('kecamatan',50);
            $table->string('desa/kelurahan',50);
            $table->integer('RT/RW');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_percobaan');
        //
    }
};
