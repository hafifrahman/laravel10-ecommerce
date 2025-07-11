<?php

namespace Database\Factories;

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
        return [
            'name' => $name = fake()->unique()->words($nb = 2, $asText = true),
            'slug' => Str::slug($name),
            'short_description' => fake()->text(200),
            'description' => fake()->text(500),
            'price' => fake()->numberBetween(1, 22),
            'SKU' => 'SMD' . fake()->numberBetween(100, 500),
            'stock_status' => 'instock',
            'quantity' => fake()->numberBetween(100, 200),
            'image' => fake()->randomElement([
                'arit.png',
                'cangkul.png',
                'cangkul_garuk.png',
                'mesin_semprot.png',
                'pupuk_organik.png'
            ]),
            'images' => fake()->numberBetween(1, 24) . '.jpg',
            'category_id' => fake()->numberBetween(1, 6),
            'brand_id' => fake()->numberBetween(1, 6),
        ];
    }
}
