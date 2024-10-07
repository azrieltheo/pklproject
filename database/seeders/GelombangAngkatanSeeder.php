<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GelombangAngkatan;

class GelombangAngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GelombangAngkatan::factory(5)->create();
    }
}
