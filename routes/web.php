<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::prefix('user')->group(function () {
    //------------ AUTH ------------
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');     
    Route::post('login-submit', [AuthController::class, 'login'])->name('login-submit');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');

    //------------ REGISTER ------------
   
    Route::get('register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('register-submit',[AuthController::class, 'register'])->name('register-submit');
});