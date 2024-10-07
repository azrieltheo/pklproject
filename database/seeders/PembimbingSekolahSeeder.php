<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PembimbingSekolah;
use App\Models\User;

class PembimbingSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PembimbingSekolah::factory(5)->create([
            'id_user' => User::inRandomOrder()->first()->id,
        ]);
    }
}
