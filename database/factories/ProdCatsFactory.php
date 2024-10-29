<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProdCats>
 */
class ProdCatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id'=>Products::factory(),
            'category_id'=>Categories::factory()
        ];
    }
}
