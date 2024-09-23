<?php

namespace Database\Factories;

use App\Models\PembimbingLapangan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PembimbingLapanganFactory extends Factory
{
    protected $model = PembimbingLapangan::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'instansi' => $this->faker->company(),
        ];
    }
}
