<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'content' => fake()->paragraphs(3, true),
            'status' => fake()->randomElement(['draft', 'published']),
            'views' => fake()->numberBetween(0, 1000),
            'created_at' => fake()->dateTimeBetween('-1 years'),
        ];
    }
}
