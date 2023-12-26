<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jewel>
 */
class JewelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->company(),
            'Gram' => random_int(1,50),
            'Color' => fake()->firstName(),
            'Image' => fake()->imageUrl(),
            'CategoryId' => random_int(1,2)
        ];
    }
}
