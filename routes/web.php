<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Show all products
Route::get('products',[ProductController::class,'index'])->name('products.index');

// create new product
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

// store new product
Route::post('/products',[ProductController::class,'store'])->name('products.store');

// show data of product
Route::get('/products/{product}',[ProductController::class,'show'])->name('products.show');

// Edit new Product
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');

// Update New Product
Route::put('/products/{product}',[ProductController::class,'update'])->name('products.update');

// Delete New product
Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('products.destroy');
