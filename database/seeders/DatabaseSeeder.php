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
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        City::factory(20)->create();
        Order::factory(20)->create();
        Client::factory(20)->create();


    }
}
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