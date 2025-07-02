<?php

namespace Database\Factories;

use App\Models\Employer; // Add this import
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['Rs. 40000','Rs. 100000','Rs. 30000']),
            'url' => fake()->url(),
            'location' => 'remote',
            'schedule' => 'Full Time',
            'featured' => false,
            // Add any other fields your jobs table has
        ];
    }
}
