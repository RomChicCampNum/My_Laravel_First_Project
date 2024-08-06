<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
//Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/products/by_name', [ProductController::class, 'indexByName']);
Route::get('/products/by_price', [ProductController::class, 'indexByPrice']);
Route::get('/products/{id}', [ProductController::class, 'show'])->where('id', '[0-9]+');


Route::get('/cart', [CartController::class, 'index']);

// routes/web.php


Route::prefix('backoffice')->group(function () {
    Route::get('/', [BackofficeController::class, 'index'])->name('backoffice');
    Route::get('/product/create', [BackofficeController::class, 'create']);
    Route::post('/product/store', [BackofficeController::class, 'store'])->name('backoffice.create');
    Route::get('/product/{id}/edit', [BackofficeController::class, 'edit']);
    Route::put('/product/{id}', [BackofficeController::class, 'update'])->name('backoffice.update');
    Route::delete('/product/{id}', [BackofficeController::class, 'destroy']);
});


