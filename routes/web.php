<?php

use Laravel\Cashier\Checkout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ReservationController;

use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('index');
})->name("Home");


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
    Route::get('/', [HotelController::class, 'index'])->name('index');
    Route::get('/create', [HotelController::class, 'create'])->name('create');
    Route::post('/', [HotelController::class, 'store'])->name('store');
    Route::get('/{hotel}', [HotelController::class, 'show'])->name('show');
    Route::get('/{hotel}/edit', [HotelController::class, 'edit'])->name('edit');
    Route::put('/{hotel}', [HotelController::class, 'update'])->name('update');
    Route::delete('/{hotel}', [HotelController::class, 'destroy'])->name('destroy');
});



Route::prefix('admin')->group( function (){
    Route::get('/',[AdminController::class,'index']);
});



Route::get('/admin',function(){
    return view('dahsboard.index');
});



// Route::get('/admin',function(){
//     return view('admin.dashboard');
// });




Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.index');
        Route::get('/hotels', [AdminController::class, 'hotels'])->name('admin.hotels');
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::put('/hotels/{hotel}/approve', [AdminController::class, 'approve']) ->name('hotels.approve');
        Route::put('/hotels/{hotel}/reject', [AdminController::class, 'reject'])->name('hotels.reject');
});

// Route::get('/admin',function(){
//     return view('dashboard.index');
// });



Route::middleware('guest')->group(function () {
    Route::get('/login', function(){
        return view('auth.login');
    });

    Route::get('/signup', function(){
        return view('auth.signup');
    });

    Route::post('/signup', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create']);
    Route::post('/login', [LoginController::class, 'store']);
});





// Aymen Root

Route::get('/stripe', [StripeController::class, 'index'])->name( 'stripe.index');
Route::post('/checkout/{reservation}', [StripeController::class, 'checkout'])->name("stripe.checkout");
Route::get('/success/{reservation}', [StripeController::class, 'success'])->name('stripe.success');
Route::get("/Payments/Create/{reservation}", [PaymentController::class, "create"])->name("payment.create");
Route::post("/Payments/Store/{reservation}", [PaymentController::class, "store"]);
Route::get("/Reservation/Index/{room}", [ReservationController::class, "index"])->name("Reservation.index");
Route::post("/Reservation/store/{room}", [ReservationController::class, "store"]);
Route::get("/Reservation/Update/{reservation}", [ReservationController::class, "update"])->name("Reservation.update");










Route::middleware('guest')->group(function () {
    Route::get('/login', function(){
        return view('Auth.login');
    });
});

// Route::get('/signup', [RegisterController::class, 'create']);
Route::post('/signup', [RegisterController::class, 'store']);
Route::middleware('auth')->group(function() {
    Route::delete('/logout', [SessionController::class, 'destroy']);
});





//-------Roome ghizlane----//
Route::resource('tags', TagController::class);
Route::resource('rooms', RoomController::class);



