<?php

namespace Database\Factories;

use App\Models\Angkatans;
use Illuminate\Database\Eloquent\Factories\Factory;

class AngkatansFactory extends Factory
{
    protected $model = Angkatans::class;

    public function definition()
    {
        return [
            'tahun' => $this->faker->year(),  // Menghasilkan tahun acak
            'nama_angkatan' => 'Angkatan ' . $this->faker->word(),
        ];
    }
}
