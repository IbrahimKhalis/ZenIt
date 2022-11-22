<?php


use App\Http\Controllers\HControllerr;
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

Route::get('/', [HControllerr::class, 'index'])->name('HomePage');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/fav', function () {
    return view('fav');
})->name('fav');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/seller', function () {
    return view('seller.loginseller');
})->name('loginseller');

Route::get('/sellerreg', function () {
    return view('seller.regisseller');
})->name('regisseller');

Route::get('/setting', function () {
    return view('dashboard');
})->name('dashboard');