<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AngkatansSeeder::class,
            GelombangAngkatanSeeder::class,
            SiswaPklSeeder::class,
            PembimbingLapanganSeeder::class,
            PembimbingSekolahSeeder::class,
            KegiatanSeeder::class,
            JadwalKegiatanSeeder::class,
        ]);
    }
}
