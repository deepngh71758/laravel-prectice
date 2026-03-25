<?php

namespace Database\Factories;

use App\Models\person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
