<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'order_number',
        'total_amount',
        'status',
        
    ];
       
    public function clients(){
        return $this->belongsToMany(Client::class,'client_order');
        }
    }        
