<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Client;



class ClientOrderSeeder extends Seeder
{
    public function run()
    {
        $clients = Client::factory()->create();
        $orders = Order::factory()->create();

        // Attach orders to clients with random selection
        foreach ($clients as $client) {
            $client->orders()->attach($orders->random(rand(1, 3))->pluck('id'));
        }
       
    }
    
}
