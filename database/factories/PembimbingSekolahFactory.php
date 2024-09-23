<?php

namespace Database\Factories;

use App\Models\PembimbingSekolahan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PembimbingSekolahanFactory extends Factory
{
    protected $model = PembimbingSekolahan::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'instansi' => $this->faker->company(),
        ];
    }
}
