<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('shop', [FrontController::class, 'shop']);
Route::get('shop', [FrontController::class, 'Produk']);
Route::get('produkdetail/{id}', [FrontController::class, 'produkDetail']);
Route::get('/', [FrontController::class, 'index'])->name('user.index');
Route::get('shop/kategori/{id}', [FrontController::class, 'kategori']);
Route::get('/search', [FrontController::class, 'search']);
Route::get('error', [FrontController::class, 'error']);
Route::get('errorThisPage', [FrontController::class, 'errorThisPage']);

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('homeAdmin', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('homeAdmin');
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('produk', App\Http\Controllers\ProdukController::class);
});

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    // Menampilkan keranjang belanja
    Route::get('/carts', [CartController::class, 'index'])->name('carts.index');

    // Menambah produk ke keranjang belanja
    Route::post('/carts', [CartController::class, 'store'])->name('carts.store');

    // Menghapus produk dari keranjang belanja
    Route::delete('/carts/{id}', [CartController::class, 'destroy'])->name('carts.destroy');

    // Mengupdate kuantitas produk dalam keranjang belanja
    Route::put('/carts/{id}', [CartController::class, 'update'])->name('carts.update');
    Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::post('/cart/remove-item', [CartController::class, 'removeItem'])->name('cart.removeItem');

    Route::get('checkout', [FrontController::class, 'checkout']);
});
