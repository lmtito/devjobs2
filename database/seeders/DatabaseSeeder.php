<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Document;
use App\Models\JobOffer;
use App\Models\Application;
use App\Models\Requirement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Application::factory(10)->create();

        Document::factory(10)->create();
    }
}
