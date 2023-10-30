<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class,'index'])->name('home');

Route::prefix('/')->group(function () {
    Route::get('about',[HomeController::class,'about'])->name('about');
    Route::get('shop',[HomeController::class,'shop'])->name('shop');
    Route::get('contact',[HomeController::class,'contact'])->name('contact');
    
    Route::middleware(['auth'])->group(function () {
        Route::get('wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
        Route::get('add-wishlist/{id}', [HomeController::class, 'add_wishlist'])->name('addWishlist');
        Route::get('delete-wishlist/{id}', [HomeController::class, 'delete_wishlist'])->name('deleteWishlist');
    });
    
});

Route::prefix('user')->group(function () {
    //------------ AUTH ------------
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');     
    Route::post('login-submit', [AuthController::class, 'login'])->name('login-submit');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');

    //------------ REGISTER ------------
   
    Route::get('register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('register-submit',[AuthController::class, 'register'])->name('register-submit');
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class,'cart'])->name('cart');
        Route::post('/add', [CartController::class,'add_to_cart'])->name('cart.add');
        Route::post('update',[CartController::class,'update_cart'])->name('cart.update');
        Route::get('remove/{id}',[CartController::class,'remove_from_cart'])->name('cartDelete');
        Route::post('/updateQuantity',[CartController::class,'updateQuantity'])->name('updateQuantity');
        });
            Route::prefix('checkout')->group(function () {
                Route::get('/', [PaymentController::class,'checkout'])->name('checkoutPage');
                Route::post('/place-order',[PaymentController::class,'place_order'])->name('placeOrder');
                Route::get('/payment',[PaymentController::class,'payment'])->name('payment');
                Route::post('/payment-success',[PaymentController::class,'payment_success'])->name('paymentSuccess');
        });
        Route::prefix('order')->group(function () {
            Route::get('detail', [OrderController::class,'orderDetail'])->name('order.detail');
        });

});
