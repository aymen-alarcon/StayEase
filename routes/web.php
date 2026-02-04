<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});

// Route::get('/signup', [RegisterController::class, 'create']);
Route::post('/signup', [RegisterController::class, 'store']);