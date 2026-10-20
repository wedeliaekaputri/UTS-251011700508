<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Memanggil SportSeeder agar data olahraga ikut masuk ke database
        $this->call([
            SportSeeder::class,
        ]);
    }
}