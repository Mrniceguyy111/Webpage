<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suscription>
 */
class SuscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->lastName(),
            'price_month' => $this->faker->unique()->numberBetween(8000, 20000),
            'price_year' => $this->faker->unique()->numberBetween(4000, 18000),
            'discount' => null,
        ];
    }
}
