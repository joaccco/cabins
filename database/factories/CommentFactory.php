<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User; // Asegúrate de importar el modelo User

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->text(200), // Contenido del comentario
            'post_id' => Post::factory(), // Relación con un post
            'user_id' => User::inRandomOrder()->first()->id, // Asigna un user_id aleatorio
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
