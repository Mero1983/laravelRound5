<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MyController extends Controller

{



function getdata(Request $req){

    return $req->input();
    }
}

//public function display($first_name,$last_name){
  //  return view('login')-> with ('first_name'.$first_name,'last_name'.$last_name);
   
    //

