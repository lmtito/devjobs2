<?php

namespace Database\Factories;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'file_path' => 'documents/' . fake()->uuid() . '.pdf',
            'document_type' => fake()->randomElement(['cv', 'certificate', 'letter', 'other']),
            'application_id' => Application::factory(),
        ];
    }
}
