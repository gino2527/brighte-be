<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Referral>
 */
class ReferralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'given_name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'home' => fake()->buildingNumber(),
            'street' => fake()->streetAddress(),
            'suburb' => fake()->city(),
            'state' => fake()->state(),
            'postcode' => fake()->postcode(),
            'country' => fake()->country(),
        ];
    }
}
