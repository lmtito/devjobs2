<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Sector;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobOffer>
 */
class JobOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = fake()->dateTimeBetween('now', '+2 months');

        return [
            'title' => fake()->jobTitle(),
            'short_description' => fake()->paragraphs(1, true),
            'description' => fake()->paragraphs(3, true),
            'image' => fake()->imageUrl,
            'benefits' => fake()->paragraphs(3, true),
            'start_date' => $startDate,
            'end_date' => fake()->dateTimeBetween($startDate, '+6 months'),
            'sector_id' => Sector::all()->random()->id,
            'is_active' => false,
            'is_featured' => false,
        ];
    }
}
