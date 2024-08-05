<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
//    public function index()
//    {
//        $products = DB::select('select * from products');
//
//        return view('product-list', ['products' => $products]);
//    }

//    public function show($id)
//    {
//        $products = DB::select('select * from products where id = ?', [$id]);
//
//        return view('product-details', ['products' => $products[0]]);
//    }

    // Affiche la liste des produits triés par nom
    public function indexByName(): \Illuminate\View\View
    {
        $products = Product::orderBy('name')->get();
        return view('index_by_name', compact('products'));
    }

    // Affiche la liste des produits triés par prix
    public function indexByPrice(): \Illuminate\View\View
    {
        $products = Product::orderBy('price')->get();
        return view('index_by_price', compact('products'));
    }

    // Affiche les détails d'un produit
    public function show($id): \Illuminate\View\View
    {
        $product = Product::findOrFail($id); // Utilisation de findOrFail pour une gestion améliorée des erreurs
        return view('products.show', compact('product'));
    }
}
