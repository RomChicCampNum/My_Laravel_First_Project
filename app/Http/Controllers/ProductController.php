<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::select('select * from products');

        return view('product-list', ['products' => $products]);
    }

    public function show(int $id)
    {
        return view('product-details', ['id' => $id]);
    }
}
