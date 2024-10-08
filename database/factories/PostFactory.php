<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(3, true),
            'category_id' => rand(1, 5), // Asumimos que ya tienes categorías con IDs del 1 al 5
            'is_active' => $this->faker->boolean(),
        ];
    }
}
