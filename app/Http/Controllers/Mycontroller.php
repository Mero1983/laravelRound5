<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Mail\ContactClient;
use App\Models\Client;
use Mail;

class MyController extends Controller{


// public function generalMail(){

// $data['theMessage']='message data is here';

// Mail::to($data['email'])->send(new DemoMail($data));



// return"mail sent !";
// }



public function myVal(){
// session()->put('test','My first session');
session()->flash('test1','My first session');
return  'Session created';
}

public function restoreVal(){
  return  'My Session Value is:' .session('test1');
  
  }

  public function deleteVal(){
    return  'Session removed';

  }

public function sendClientMail(){

$data= Client::findOrFail(1)->toArray();
$data['The Message']='My Message';
Mail::to ($data['email'])->send(
new ContactClient($data)
);
return 'mail sent';

}

// function getdata(Request $req){

//     return $req->input();
//     }

  


// public function display($first_name,$last_name){
//    return view('login')-> with ('first_name'.$first_name,'last_name'.$last_name);

// }
}
