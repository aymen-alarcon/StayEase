<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get("/Admin/Categories/index", [CategoryController::class, "index"])->name("Admin.Categories.Create")->middleware("auth");