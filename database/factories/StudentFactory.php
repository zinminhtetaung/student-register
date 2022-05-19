<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'dob' => now(),
            'nrc' => $this->faker->swiftBicNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'course' => $this->faker->jobTitle(),
            'created_at' => now(),
        ];
    }
}
