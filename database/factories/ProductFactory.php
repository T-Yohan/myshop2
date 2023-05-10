<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id'=>1,
            'category_id'=>mt_rand(1, 9),
            'name'=>fake()->name(),
            'Description'=>fake()->text(),
            'Prix'=>mt_rand(1, 1000),
        ];
    }
}
