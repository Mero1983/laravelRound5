<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientSeeder extends Seeder 
{
use HasFactory;
    public function run()
    {
        // Seed a set of clients using factory
        Client::factory(20)->create();
    }
} 