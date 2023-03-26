<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GroceryStoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->text(),
            'image_url' => fake()->imageUrl(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state'=> fake()->state(),
            'zip' => 'MW1234',
            'country' => fake()->country(),
        ];
    }
}
