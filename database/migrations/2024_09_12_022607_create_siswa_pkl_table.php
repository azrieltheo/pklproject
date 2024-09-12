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
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('gelombang_id')->constrained('gelombang_angkatan');
            $table->string('status_pkl');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswa_pkl');
    }
}