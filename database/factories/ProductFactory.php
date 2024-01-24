<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $brand = Brand::inRandomOrder()->first();
        $category = Category::inRandomOrder()->first();
        return [
            'title' => fake()->name(),
            'short_des' => fake()->paragraph(),
            'price' => fake()->numberBetween(100, 5000),
            'discount' => fake()->boolean(),
            'discount_price' => fake()->numberBetween(100, 5000),
            'image' => fake()->imageUrl(),
            'stock' => fake()->boolean(),
            'qty' => fake()->numberBetween(1, 50),
            'star' => fake()->randomFloat(),
            'remarks'=> 'hot',
            'slug'=> Str::slug(fake()->name()),
            'brand_id'=> $brand->id,
            'category_id'=>$category->id

        ];
    }
}
