<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'city' => $this->faker->unique()->city(),
            'state' => $this->faker->unique()->state(),
            'country' => $this->faker->unique()->country(),
            'address' => $this->faker->unique()->address(),
            'other_info' => $this->faker->unique()->realText(200)
        ];
    }
}
