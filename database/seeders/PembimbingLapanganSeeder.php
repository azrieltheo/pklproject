<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PembimbingLapangan;

class PembimbingLapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PembimbingLapangan::factory(5)->create();
    }
}
