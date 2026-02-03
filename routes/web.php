<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/geron',function(){
    return '<h1>bonjour gerant</h1>' ;
});
Route::get('/hotel',function(){
    return view('hotel.index');
});
Route::post('/hotel',function(){
    return view('hotel.store');
});
Route::get('/hotel/{hotel}',function(){

});
