<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class clientControllere extends Controller

{


public function creat()
{
    
}


    public function store()
    {
php artisan make:migration create_clients_table
    $client = new client();
    $client->clientName = 'Egypt Air';
    $client->phone= '021526000';
    $client->email= 'Egypt Air@gmail.com';
    $client->website= 'https://egyptair.com';
    $client->save(); 
    return'Inserted Successfully';

    }
}
    //

