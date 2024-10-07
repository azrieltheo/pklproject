<?php

namespace Database\Factories;

use App\Models\JadwalKegiatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalKegiatanFactory extends Factory
{
    protected $model = JadwalKegiatan::class;

    public function definition()
    {
        return [
            'kegiatan_id' => \App\Models\Kegiatan::inRandomOrder()->first()->id,
            'tanggal' => $this->faker->date(), // Pastikan ini ada
            'waktu_mulai' => $this->faker->dateTime(),
            'waktu_selesai' => $this->faker->dateTime(),
        ];        
    }
}
