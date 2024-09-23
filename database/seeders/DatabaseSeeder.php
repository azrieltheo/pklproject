<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Angkatan;
use App\Models\GelombangAngkatan;
use App\Models\SiswaPkl;
use App\Models\PembimbingLapangan;
use App\Models\PembimbingSekolahan;
use App\Models\Kegiatan;
use App\Models\JadwalKegiatan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        User::factory(10)->create();

       
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password') 
            ]
        );


        Angkatan::factory(5)->create();

        GelombangAngkatan::factory(5)->create();

        SiswaPkl::factory(20)->create();

        PembimbingLapangan::factory(5)->create();

        PembimbingSekolahan::factory(5)->create();
      
        Kegiatan::factory(5)->create();

        JadwalKegiatan::factory(10)->create();
    }
}
