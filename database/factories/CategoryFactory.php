<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    // Specify the model that this factory is for
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),                 // Generate a random word for category name
            'description' => $this->faker->sentence(),      // Generate a random sentence for description
            'is_active' => $this->faker->boolean(),         // Generate a random boolean (true/false) for is_active
        ];
    }
}
