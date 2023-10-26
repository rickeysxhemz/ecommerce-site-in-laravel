<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
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
Route::post('/cart/add', [CartController::class,'add_to_cart'])->name('cart.add');
});