<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Product;

class ProductFactory extends Factory{
    protected $model = Product::class;
    public function definition(){
        return[
            'name' => fake()->word(),
            'price' => fake()->numberBetween(100, 1000),
            'category_id' => Category::factory(),
        ];
    }
}