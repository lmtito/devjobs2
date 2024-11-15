<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\JobOffer;
use App\Enums\ApplicantStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->applicant(),
            'job_offer_id' => JobOffer::factory(),
            'application_date' => fake()->dateTimeThisYear(),
            'status' => fake()->randomElement(ApplicantStatus::class),
        ];
    }
}
