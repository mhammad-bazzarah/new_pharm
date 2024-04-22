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
            'image' => 'img/seedsgeneral.jpg' ,
            'name' => fake()->name ,
            'price' => fake()->numberBetween(1000,1000000),
            'description' =>fake()->paragraph(5),
            'quantity' => fake()->numberBetween(0,10),
            'category_id' => fake()->numberBetween(1,3),
        ];
    }
}
