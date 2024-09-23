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
            'kegiatan_id' => function() {
                return \App\Models\Kegiatan::factory()->create()->id;
            },
            'waktu_mulai' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'waktu_selesai' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
        ];
    }
}
