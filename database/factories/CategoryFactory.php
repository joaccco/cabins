<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Nombre de la categoría
            'slug' => $this->faker->slug(),  // Slug amigable para la URL
            'description' => $this->faker->sentence(10), // Descripción de la categoría
        ];
    }
}
