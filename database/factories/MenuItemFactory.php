<?php

namespace Database\Factories;

use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuItem>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(2),
            'description' => fake()->paragraph,
            'category' => fake()->randomElement(MenuItem::$category),
            'price' => fake()->numberBetween(5, 20),
            'imagePath' => fake()->imageUrl, // or $faker->imageUrl(), depending on your needs

        ];
    }
}
