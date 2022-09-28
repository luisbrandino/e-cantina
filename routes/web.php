<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

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

// Auth Routes

Route::post('/auth/oauth/{provider}', [AuthController::class, 'auth']);
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return redirect()->route('home');
})->name('login');

Route::get('/cardapio', [MenuController::class, 'index'])->name('menu');

Route::get('/cart', function () {
    return view('cart');
})->middleware('auth');

Route::middleware('auth')->group(function () {

    // Cart
    Route::get('/cart/add/{product}', [CartController::class, 'add']);
    Route::get('/cart/remove/{product}', [CartController::class, 'remove']);
});
