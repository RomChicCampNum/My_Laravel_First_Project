<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
//Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/products/by_name', [ProductController::class, 'indexByName']);
Route::get('/products/by_price', [ProductController::class, 'indexByPrice']);
Route::get('/products/{id}', [ProductController::class, 'show'])->where('id', '[0-9]+');


use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'index']);
