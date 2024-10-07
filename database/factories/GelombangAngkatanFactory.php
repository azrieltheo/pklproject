<?php

namespace Database\Factories;

use App\Models\GelombangAngkatan;
use App\Models\Angkatans;
use Illuminate\Database\Eloquent\Factories\Factory;

class GelombangAngkatanFactory extends Factory
{
    protected $model = GelombangAngkatan::class;

    public function definition()
    {
        return [
            'angkatan_id' => Angkatans::inRandomOrder()->first()->id, // Mengambil id dari tabel angkatans
            'nama_gelombang' => $this->faker->word(),
            'waktu_mulai' => $this->faker->date(),
            'waktu_selesai' => $this->faker->date(),
        ];
    }
}
