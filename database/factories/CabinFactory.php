<?php

namespace Database\Factories;

use App\Models\Cabins;
use Illuminate\Database\Eloquent\Factories\Factory;

class CabinFactory extends Factory
{
    protected $model = Cabins::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->city(),
            'capacity' => $this->faker->numberBetween(2, 6),
            'price_per_night' => $this->faker->randomFloat(2, 100, 300),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
