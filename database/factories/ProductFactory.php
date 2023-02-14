<?php

namespace App\Models\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'details' => $this->faker->sentence,
            'price' => $this->faker->randomNumber(2),
            'status' => $this->faker->randomElement(['published', 'draft']),
            'image' => $this->faker->image('public/images', 400, 300, null, false),
        ];
    }
}

factory(Product::class)->create();
