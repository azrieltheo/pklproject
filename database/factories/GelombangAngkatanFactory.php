<?php

namespace Database\Factories;

use App\Models\GelombangAngkatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class GelombangAngkatanFactory extends Factory
{
    protected $model = GelombangAngkatan::class;

    public function definition()
    {
        return [
            'angkatan_id' => function() {
                return \App\Models\Angkatan::factory()->create()->id;
            },
            'nama_gelombang' => 'Gelombang ' . $this->faker->numberBetween(1, 5),
            'waktu_mulai' => $this->faker->date(),
            'waktu_selesai' => $this->faker->date(),
        ];
    }
}
