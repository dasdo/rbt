<?php

namespace Database\Factories;

use App\Models\ProductUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryMovementFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'product_id' => fake()->word(),
            'movement_type' => fake()->word(),
            'quantity' => fake()->numberBetween(-10000, 10000),
            'previous_stock' => fake()->numberBetween(-10000, 10000),
            'new_stock' => fake()->numberBetween(-10000, 10000),
            'reference_type' => fake()->word(),
            'reference_id' => fake()->randomNumber(),
            'notes' => fake()->text(),
            'user_id' => fake()->word(),
            'location' => fake()->word(),
            'product_user_id' => ProductUser::factory(),
        ];
    }
}
