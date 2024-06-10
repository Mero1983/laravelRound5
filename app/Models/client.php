<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\City;

class Client extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        
        'ClientName',
        'phone',
        'email','website',
        'city_id',
        'order_id',
        'active','
        image',
    'address',];
        public function city(){
          return $this->belongsTo(City::class);
        }
        public function order(){
            return $this->belongsToMany(Order::class,'client_order');
    
        }
        
    }
 // public function getActiveStatus()
        // {
        //     return $this->active ? 'Yes':'No' ;
        // 