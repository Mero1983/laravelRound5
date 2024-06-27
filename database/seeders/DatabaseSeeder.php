<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\City;
use App\Models\Order;
use App\Models\ClientOrder;
use HasFactory;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        {
            // Seed the database with clients and orders
            $this->call(ClientSeeder::class);
            $this->call(OrderSeeder::class);
            $this->call(UserSeeder::class);

            // Create clients and orders using factories
            $clients = Client::factory(20)->create();
            $orders = Order::factory(20)->create();
            $users = User::factory(20)->create();

            
            // Attach random orders to each client
            $clients->each(function ($client) use ($orders) {
                // Attach between 1 to 3 random orders to the current client
                $randomOrders = $orders->random(rand(1, 3))->pluck('id')->toArray();
                $client->orders()->attach($randomOrders);
            });
        }
    } 

      
        
    }
    

   
   
   
   
   
   
   
   
   
    /**
     * Seed the application's database.
     
      */
    // public function run(): void
    // {
    //     City::factory(20)->create();
    //     Order::factory(20)->create();
    //     Client::factory(20)->create();


    // }

  // Client::factory()->create([
        //     'ClientName'=>'pipo',
        //     'phone'=>'0123456',
        //     'email'=>'pipo@example.com',
        //     'website'=>'pipo',
        //     'city'=>'pipo',
        //     'address'=>'pipo',
        //     'active'=>'pipo',

        // ]);
        
        // $this->call(ClientSeeder::class);