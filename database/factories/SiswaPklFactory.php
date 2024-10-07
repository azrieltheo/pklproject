<?php

namespace Database\Factories;

use App\Models\SiswaPkl;
use App\Models\User;
use App\Models\Angkatans;
use App\Models\GelombangAngkatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaPklFactory extends Factory
{
    protected $model = SiswaPkl::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Membuat user baru
            'angkatan_id' => Angkatans::factory(), // Membuat angkatan baru
            'gelombang_angkatan_id' => GelombangAngkatan::factory(), // Membuat gelombang angkatan baru
            'nama' => $this->faker->name(), // Nama siswa
            'nis' => $this->faker->numerify('#####'), // NIS siswa
            'status_pkl' => 'belum', // Status PKL default
        ];
    }
}
