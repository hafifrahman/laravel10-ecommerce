<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AppController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/product/{slug}', [ShopController::class, 'detail']);
Route::get('/checkout', [ShopController::class, 'checkout']);
Route::resource('cart', CartController::class);

Route::middleware('auth')->group(function () {
    Route::get('/my-account', [UserController::class, 'index']);
});

Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard']);
    Route::resource('product', ProductController::class);
});

require __DIR__ . '/auth.php';
