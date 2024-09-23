<?php

namespace Database\Factories;

use App\Models\Kegiatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KegiatanFactory extends Factory
{
    protected $model = Kegiatan::class;

    public function definition()
    {
        return [
            'nama_kegiatan' => 'Kegiatan ' . $this->faker->word(),
            'deskripsi' => $this->faker->paragraph(),
        ];
    }
}
