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
            'ClientName' => $this->faker->name,
            'phone' => $this->faker->unique()->safeEmail,
            'email' => $this->faker->phoneNumber,
            'website' => $this->faker->address,
            'city' => $this->faker->address,
            'address' => $this->faker->address,
            'image' => $this->faker->address,
            'active' => $this->faker->address,


        ];
    }
}