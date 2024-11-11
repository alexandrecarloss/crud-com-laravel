<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id_user' => User::factory(),
            'id_user' => fake()->numberBetween(6, 9),
            'title' => fake()->sentence(),
            'pages' => fake()->numberBetween(100, 1000),
            'price' => fake()->randomFloat(2, 10, 200),
        ];
    }
}
