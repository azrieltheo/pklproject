<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JadwalKegiatan;

class JadwalKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalKegiatan::factory(10)->create();
    }
}
