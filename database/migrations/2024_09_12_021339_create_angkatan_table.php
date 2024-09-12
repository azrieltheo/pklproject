<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngkatanTable extends Migration
{
    public function up()
    {
        Schema::create('angkatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_angkatan');
            $table->year('tahun_mulai');
            $table->year('tahun_selesai')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('angkatan');
    }
}