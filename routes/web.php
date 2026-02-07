<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\CategoryController;
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










Route::prefix('hotels')->group(function () {

    Route::get('/', [HotelController::class, 'index'])->name('gerant.index');
    Route::get('/create', [HotelController::class, 'create'])->name('gerant.create');
    Route::post('/', [HotelController::class, 'store'])->name('gerant.store');
    Route::get('/{hotel}', [HotelController::class, 'show'])->name('gerant.show');
    Route::get('/{hotel}/edit', [HotelController::class, 'edit'])->name('gerant.edit');
    Route::put('/{hotel}', [HotelController::class, 'update'])->name('gerant.update');
    Route::delete('/{hotel}', [HotelController::class, 'destroy'])->name('gerant.destroy');
});






Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/hotels', [AdminController::class, 'hotels'])->name('admin.hotels');
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::put('/hotels/{hotel}/approve', [AdminController::class, 'approve']) ->name('hotels.approve');
        Route::put('/hotels/{hotel}/reject', [AdminController::class, 'reject'])->name('hotels.reject');
    });







// Route::get('/admin',function(){
//     return view('dashboard.index');
// });


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



//
Route::get("/Dashboard/Categories/index", [CategoryController::class, "index"])->name("categories.index");
Route::get("/Dashboard/Categories/Create", [CategoryController::class, "create"]);
Route::post("/Dashboard/Categories/Create/Store", [CategoryController::class, "store"]);
Route::get("/Dashboard/Categories/Edit/{category}", [CategoryController::class, "edit"]);
Route::put("/Dashboard/Categories/Update/{category}", [CategoryController::class, "update"]);
Route::delete("/Dashboard/Categories/Destroy/{category}", [CategoryController::class, "destroy"]);
