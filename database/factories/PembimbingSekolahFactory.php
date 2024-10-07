<?php

namespace Database\Factories;

use App\Models\PembimbingSekolah;
use App\Models\User; // Tambahkan import User
use Illuminate\Database\Eloquent\Factories\Factory;

class PembimbingSekolahFactory extends Factory
{
    protected $model = PembimbingSekolah::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'instansi' => $this->faker->company(),
            'id_user' => User::factory()->create()->id, // Tambahkan ini untuk mengisi id_user
        ];
    }
}
