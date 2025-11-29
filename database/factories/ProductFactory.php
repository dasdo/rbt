<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'sku' => fake()->regexify('[A-Za-z0-9]{unique}'),
            'description' => fake()->text(),
            'short_description' => fake()->text(),
            'category_id' => Category::factory(),
            'price' => fake()->word(),
            'cost_price' => fake()->word(),
            'sale_price' => fake()->word(),
            'weight' => fake()->word(),
            'dimensions' => fake()->word(),
            'brand' => fake()->word(),
            'model' => fake()->word(),
            'specifications' => fake()->text(),
            'image' => fake()->word(),
            'images' => fake()->text(),
            'is_active' => fake()->boolean(),
            'is_featured' => fake()->boolean(),
            'stock_status' => fake()->word(),
            'reorder_point' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
