<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => '$' . number_format(fake()->numberBetween(50000, 150000)),
            'description' => fake()->sentence() . ' ' . fake()->sentence() . ' ' . fake()->sentence(),
        ];
    }
}
