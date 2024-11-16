<?php

namespace Database\Seeders;

//use App\Models\User;
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
        // User::factory(10)->create();
/*
        User::factory()->create([
            'name' => 'Benja',
            'email' => 'benhito112@gmail.com',
            'role' => 'manager',
        ]);
*/
        JobOffer::factory(10)->create();

        Requirement::factory(10)->create();

        Application::factory(10)->create();

        Document::factory(10)->create();
    }
}
