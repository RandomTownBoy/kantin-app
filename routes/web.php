<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('home');


Route::get('/products/index', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/category/{category}', [App\Http\Controllers\ProductController::class, 'showCategory'])->name('category.show');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('show');

// Tambahkan rute pencarian berikut
Route::get('/search', [ProductController::class, 'search'])->name('search');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
