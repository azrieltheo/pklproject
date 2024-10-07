<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaPklTable extends Migration
{
    public function up()
    {
        Schema::create('siswa_pkl', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke users
            $table->foreignId('angkatan_id')->constrained('angkatans')->onDelete('cascade'); // Relasi ke angkatan
            $table->foreignId('gelombang_angkatan_id')->constrained('gelombang_angkatan')->onDelete('cascade'); // Relasi ke gelombang angkatan
            $table->string('nama'); // Nama siswa
            $table->string('nis'); // NIS siswa
            $table->string('status_pkl')->default('belum'); // Status PKL
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswa_pkl');
    }
}
