<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Angkatans;

class AngkatansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Angkatans::factory(5)->create();
    }
}
