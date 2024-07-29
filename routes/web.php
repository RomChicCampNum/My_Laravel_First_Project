<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'Homepage';
});

Route::get('/product', function () {
    return 'Liste des produits';
});

Route::get('/product/{id}', function () {
    return 'Fiche du produit {id}';
});

Route::get('/cart', function () {
    return 'Panier';
});
