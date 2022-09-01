<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    protected $model = Product::class;
    public function definition()
    {
        return [
            'name_product' => $this->faker->name_product,
            'description' => $this->faker->description,
            'category' => $this->faker->category,
            'office' => $this->faker->office,
            'price' => $this->faker->price,
            'date_purchase' => $this->faker->date_purchase,
        ];
    }
}
