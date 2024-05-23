<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['StudentName','age','city','image','active'];
  
    public function getActiveStatus()
    {
        return $this->active ? 'Yes':'No' ;
    }
}
