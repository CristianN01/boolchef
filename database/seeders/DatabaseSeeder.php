<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            VoteSeeder::class,
            SponsorshipSeeder::class,
            SpecializationSeeder::class,
            MessageSeeder::class,
            ReviewSeeder::class,
            UserSeeder::class,
            ChefSeeder::class,
        ]);
    }
}