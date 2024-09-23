<?php

namespace Database\Factories;

use App\Models\SiswaPkl;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaPklFactory extends Factory
{
    protected $model = SiswaPkl::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nis' => $this->faker->numerify('#####'),
            'angkatan_id' => function() {
                return \App\Models\Angkatan::factory()->create()->id;
            },
            'gelombang_angkatan_id' => function() {
                return \App\Models\GelombangAngkatan::factory()->create()->id;
            },
        ];
    }
}
