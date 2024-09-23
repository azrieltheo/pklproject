<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembimbingSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembimbing_sekolah', function (Blueprint $table) {
            $table->id(); // Primary key, auto incrementing ID
            $table->string('nama'); // Nama pembimbing
            $table->string('instansi'); // Nama instansi/sekolah pembimbing
            $table->unsignedBigInteger('id_user'); // Foreign key to 'users' table
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembimbing_sekolah');
    }
}
