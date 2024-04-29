<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('marwa',function(){
    return view('welcome to my website');
});
