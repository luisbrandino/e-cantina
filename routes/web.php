<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::middleware('auth')->group(function () {
    // Cart
    Route::post('/cart/add/{product}', [CartController::class, 'add']);
    Route::post('/cart/update/{product}', [CartController::class, 'update']);
    Route::post('/cart/remove/{product}', [CartController::class, 'remove']);

    // Payment
    Route::post('/payment/success', [PaymentController::class, 'success'])->name('payment.success');

});

Route::get('/admin/login', [AdminController::class, 'getLoginPage'])->name('admin.login');
Route::post('/admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::name('admin')->prefix('admin')->group(function() {

    Route::get('/', function() {
        return redirect()->to('/admin/dashboard');
    });

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Products (Create, Update, Delete)
    Route::get('/products', [ProductController::class, 'get'])->name('.products');
    Route::post('/products/create', [ProductController::class, 'create'])->name('.products.create');
    Route::post('/products/{product}/edit', [ProductController::class, 'edit'])->name('.products.edit');

    Route::get('/order/pending', [OrderController::class, 'getPendingOrders']);
    Route::post('/order/{order}/finish', [OrderController::class, 'finish'])->name('.order.finish');
    Route::post('/order/{order}/cancel', [OrderController::class, 'finish'])->name('.order.cancel');
});
