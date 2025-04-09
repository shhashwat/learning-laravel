<?php

namespace Database\Factories;

use App\Models\Employer;
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
            'salary' => fake()->randomElement(['Rs. 15,00,000', 'Rs. 3,60,000', 'Rs. 9,00,000']),
            'location' => fake()->city(),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Internship', 'Contract']),
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}
