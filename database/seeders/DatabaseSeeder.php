<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Track;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Album::factory(21)->create();
        Track::factory(200)->create();
    }
}
