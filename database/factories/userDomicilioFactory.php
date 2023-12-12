<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\userDomicilio>
 */
class userDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1,100),
            'domicilio' => fake()->streetAddress(),
            'numero_exterior' => fake()->numberBetween(1,2500),
            'colonia' => fake()->city(),
            'cp' => fake()->postcode(),
            'ciudad' => fake()->state()
        ];
    }
}
