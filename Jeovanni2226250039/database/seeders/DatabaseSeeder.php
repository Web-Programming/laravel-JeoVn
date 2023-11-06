<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Prodi::create(
        [
            'nama' => 'Teknik Informatika'
        ]
        );
        Prodi::create(
        [
            'nama' => 'Manajemen Informatika'
        ]
        );
        Prodi::create(
        [
            'nama' => 'Sistem Informasi'
        ]
        );
    }
}
