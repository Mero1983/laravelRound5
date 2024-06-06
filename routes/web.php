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
Route::get('/', function () {
    return view('stacked');
});

//Route::post('form1',[MyController::class,'getData']);
//Route::view('form1','form1');
//Route::get('insertClient',[clientController::class,'store']);
Route::post('insertStudent',[StudentController::class,'store'])->name('insertStudent');
Route::get('addStudent',[StudentController::class,'create'])->name('addStudent');
Route::get('Students',[StudentController::class,'index'])->name('Students');
Route::get('showStudent/{id}',[StudentController::class,'show'])->name('showStudent');
Route::delete('delStudent',[StudentController::class,'destroy'])->name('delStudent');
Route::get('trashStudent',[StudentController::class,'trash'])->name('trashStudent');
Route::get('restoreStudent/{id}',[StudentController::class,'restore'])->name('restoreStudent');
Route::delete('forceDeleteStudent',[StudentController::class,'forceDeleteStudent'])->name('forceDeleteStudent');
Route::get('editStudent/{id}',[StudentController::class,'edit'])->name('editStudent');
Route::put('updateStudent/{id}', [StudentController::class, 'update'])->name('updateStudent');






Route::post('insertClient',[ClientController::class,'store'])->name('insertClient');
Route::get('addClient',[ClientController::class,'create'])->name('addClient');
Route::get('Clients',[ClientController::class,'index'])->name('Clients');
Route::get('editClient/{id}',[ClientController::class,'edit'])->name('editClient');
Route::put('updateClient/{id}',[ClientController::class,'update'])->name('updateClient');
Route::get('showClient/{id}',[ClientController::class,'show'])->name('showClient');
Route::delete('delClient',[ClientController::class,'destroy'])->name('delClient');
Route::get('trashClient',[ClientController::class,'trash'])->name('trashClient');
Route::get('restoreClient/{id}',[ClientController::class,'restore'])->name('restoreClient');
Route::delete('forceDelete',[ClientController::class,'forceDelete'])->name('forceDelete');

