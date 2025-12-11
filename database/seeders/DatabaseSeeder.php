<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\ContactSubmissionSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ServiceSeeder::class,
            ProjectSeeder::class,
            PostSeeder::class,
            ContactSubmissionSeeder::class,
        ]);
    }
}
