<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
         ->has(Chirp::factory()->count(3), 'chirps')
         ->create([
             'name' => 'Kresna',
             'email' => 'kresna@example.com',
             'password' => bcrypt('12345678'),
         ]);

         User::factory()
         ->has(Chirp::factory()->count(3), 'chirps')
         ->create([
             'name' => 'Satya',
             'email' => 'satya@example.com',
             'password' => bcrypt('12345678'),
         ]);
    }
}
