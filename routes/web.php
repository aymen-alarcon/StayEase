<?php

use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('index');
});


Route::get('/geron',function(){
    return '<h1>bonjour gerant</h1>' ;
});
// Route::get('/hotel',function(){
//     return view('hotel.index');
// });
// Route::post('/hotel',function(){
//     return view('hotel.store');
// });
// Route::get('/hotel/{hotel}',function(){




Route::get('/hotels', [HotelController::class, 'index']);
Route::get('/hotels/create', [HotelController::class, 'create']);
Route::post('/hotels', [HotelController::class, 'store']);
Route::get('/hotels',[HotelController::class,'show']);
Route::get('/hotels/{hotels}/edit', [HotelController::class, 'edit']);
Route::put('/hotels/{hotel}', [HotelController::class, 'update']);
Route::delete('/hotels/{hotel}', [HotelController::class, 'destroy']);

Route::get('/admin',function(){
    return view('admin.dashboard');
});


Route::get('/login', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});

// Route::get('/signup', [RegisterController::class, 'create']);
Route::post('/signup', [RegisterController::class, 'store']);
