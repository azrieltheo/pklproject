<?php

namespace Database\Factories;

use App\Models\Angkatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class AngkatanFactory extends Factory
{
    protected $model = Angkatan::class;

    public function definition()
    {
        return [
            'tahun' => $this->faker->year(),
            'nama_angkatan' => 'Angkatan ' . $this->faker->year(),
        ];
    }
}
