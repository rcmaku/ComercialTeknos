<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name'=> fake()->domainName(),
            'product_description'=> fake()->text(),
            'inStock'=>fake()->numerify(),
            'price'=>fake()->numerify(),
            'created_at'=> fake()->dateTime(),
            'updated_at'=> fake()->dateTime(),
        ];
    }
}
