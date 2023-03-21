<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'answer' => $this->faker->randomElement(['yes','no']),
            'first_name' => $this->faker->firstName(),
            'last_name'=> $this->faker->lastName(),
            'email' => $this->faker->email(),
            
        ];
    }
}
