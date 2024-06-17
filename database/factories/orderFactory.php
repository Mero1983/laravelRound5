<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class orderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_number' =>  $this->faker->numberBetween(1, 50),
            'total_amount' => $this->faker->numberBetween(1, 50),
            'status' => $this->faker->randomElement(['pending', 'processing', 'shipped', 'completed', 'cancelled']),
    
        ];
    }
}
