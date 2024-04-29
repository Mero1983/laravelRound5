<?php
namespace App\Http\Controller;
use illuminate\Http\Request;
class MyController extends controller
{
    public function my_data(){
         return view('test');
         
    }
};