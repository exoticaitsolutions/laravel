<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProductController};
use App\Http\Controllers\CartController;
use App\Http\Controllers\ViewCartController;


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
    return view('welcome');
});

Route::get('/products/{id}', [ProductController::class,'show'])->name('product.show');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/products', [ProductController::class,'index'])->name('product.index');
Route::get('/view-cart', [ViewCartController::class,'index'])->name('viewcart.index');




