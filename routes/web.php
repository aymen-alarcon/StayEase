<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get("/Admin/Categories/index", [CategoryController::class, "index"])->name("Admin.Categories.Create")->middleware("auth");

Route::get('/login', function(){
    return view('login');
});

Route::get('/Home', function(){
    return view('index');
});

Route::get('/Reservation/create/{room}', [ReservationController::class, "create"]);