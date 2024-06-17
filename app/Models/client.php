<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\City;
use App\Models\Order;

class Client extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        
        'ClientName',
        'phone',
        'email','website',
        'active','
        image',
    'address',];
        public function city(){
          return $this->belongsTo(City::class);
        }
        public function orders(){
            return $this->belongsToMany(Order::class,'client_order');
    
        }
        
    }
 // public function getActiveStatus()
        // {
        //     return $this->active ? 'Yes':'No' ;
        // 