<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembimbingSekolahTable extends Migration
{
    public function up()
    {
        Schema::create('pembimbing_sekolah', function (Blueprint $table) { // Perbaikan nama tabel
            $table->id();
            $table->string('nama');
            $table->string('instansi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembimbing_sekolah'); // Perbaikan nama tabel
    }
}
