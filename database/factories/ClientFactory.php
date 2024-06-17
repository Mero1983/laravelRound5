<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
            'ClientName' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'website' => fake()->url(),
            'address' => fake()->address(),
            'image' => fake()->imageUrl(640, 480),
            'active' => fake()->numberBetween(0, 1),

        ];
    }
}