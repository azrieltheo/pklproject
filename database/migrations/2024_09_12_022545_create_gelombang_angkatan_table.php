<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGelombangAngkatanTable extends Migration
{
    public function up()
    {
        Schema::create('gelombang_angkatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('angkatan_id')->constrained('angkatan');
            $table->string('nama_gelombang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gelombang_angkatan');
    }
}