<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StripeController;

use Laravel\Cashier\Checkout;

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







Route::prefix('gerant/hotels')->name('hotels.')->group(function () {
    Route::get('/', [HotelController::class, 'index'])->name('index');
    Route::get('/create', [HotelController::class, 'create'])->name('create');
    Route::post('/', [HotelController::class, 'store'])->name('store');
    Route::get('/{hotel}', [HotelController::class, 'show'])->name('show');
    Route::get('/{hotel}/edit', [HotelController::class, 'edit'])->name('edit');
    Route::put('/{hotel}', [HotelController::class, 'update'])->name('update');
    Route::delete('/{hotel}', [HotelController::class, 'destroy'])->name('destroy');
});






Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/hotels', [AdminController::class, 'hotels'])->name('hotels');
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::put('/hotels/{hotel}/approve', [AdminController::class, 'approve']) ->name('hotels.approve');
        Route::put('/hotels/{hotel}/reject', [AdminController::class, 'reject'])->name('hotels.reject');
    });








Route::middleware('guest')->group(function () {
    Route::get('/login', function(){
        return view('Auth.login');
    });

    Route::get('/signup', function(){
        return view('Auth.signup');
    });

Route::get('/stripe', [StripeController::class, 'index'])->name('stripe.index');
Route::post('/checkout', [StripeController::class, 'checkout'])->name('stripe.checkout');
Route::get('/success', [StripeController::class, 'success'])->name('stripe.success');
Route::get("/Payments/Create", [PaymentController::class, "create"])->name("payment.create");
Route::post("/Payments/Store", [PaymentController::class, "store"]);


    Route::post('/signup', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create']);
    Route::post('/login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function() {
    Route::delete('/logout', [SessionController::class, 'destroy']);
});
