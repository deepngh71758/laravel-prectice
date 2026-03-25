<?php

namespace Database\Factories;

use App\Models\person;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<product>
 */
class ProductFactory extends Factory
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
            'price' => fake()->numberBetween(100, 1000),
            'detail' => fake()->sentence(),
            'img' => fake()->imageUrl(),

            // 'person_id' => person::factory()
            'person_id' => Person::inRandomOrder()->first()->id
        ];
    }
}
