<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
Route::get('/',[HomeController::class, 'index']);

use App\Http\Controllers\ProductController;
Route::get('/product',[ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'details']);

use App\Http\Controllers\CartController;
Route::get('/cart', [CartController::class, 'index']);
