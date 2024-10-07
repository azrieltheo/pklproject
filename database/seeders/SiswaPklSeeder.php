<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiswaPkl;
use App\Models\User;
use App\Models\GelombangAngkatan;

class SiswaPklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiswaPkl::factory(20)->create([
            'user_id' => User::inRandomOrder()->first()->id, 
            'gelombang_angkatan_id' => GelombangAngkatan::inRandomOrder()->first()->id, 
        ]);
    }
}
