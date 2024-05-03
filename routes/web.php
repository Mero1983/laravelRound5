<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;



/*Route::get('/', function () {
    return view('welcome');
});
Route::get('marwa/{id}',function($id){
    return'welcome to my website'.$id;
});
Route::get('marwa/{id?}'),function($id=0);
    return'welcome to my website'.$id;
where (['id'<='[0-9]'+]; 
//regular expression  when i need to specific number 
Route::get('marwa/{id?}',function($id =0){
    return'welcome to my website'.$id;
})->whereNumber('id'); 

Route::get('course/{name}',function($name){
    return'My name is:'.$name;
})->whereIn('name',['marwa','Nour','Ali','Celina']);


Route::prefix('cars')->group(function(){
    Route::get('bmw',function(){
        return'category is BMW';
    });
    Route::get('mercedes',function(){
        return 'category is Mercedes';
});
});*/
//Route::get('test20',[MyController::class,'my_data']);
//Route::get('test20',function(){
 //   return view('test');
//});
//Route::get('form1',function(){

//});
//return view('form1');
//});
//Route::post('recform1',function(){
//return 'Data Received';
//})->name('receiveform1');


//Route::post('recform1',function(){
   // return 'Data received';
//->name('receiveForm1');
//Route::get('test20',[MyController::class,'my_data']);

//<form action="{{route('receiveform1')}}" method="POST">
//@csrf
//Route::fallback(function(){
    //return 'The required is not found';
   // return redirect('/');
//});

//Route::post('form1',[MyController::class,'getData']);
//Route::view('form1','form1');
//Route::get('insertClient',[clientController::class,'store']);
Route::post('insertStudent',[StudentController::class,'store'])->name('insertStudent');
Route::get('addStudent',[StudentController::class,'create']);
