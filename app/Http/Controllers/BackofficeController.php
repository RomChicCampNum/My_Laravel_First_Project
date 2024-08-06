<?php

// app/Http/Controllers/BackofficeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BackofficeController extends Controller
{
    public function index(Request $request)
    {
        $sortBy = $request->input('sort', 'id'); // Tri par défaut par ID
        $sortOrder = $request->input('order', 'asc'); // Ordre par défaut croissant

        // Assure que l'ordre de tri est valide
        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'asc';

        // Récupère les produits triés
        $products = Product::orderBy($sortBy, $sortOrder)->get();

        return view('backoffice.index', [
            'products' => $products,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder
        ]);
    }

    public function create()

    {
        return view('backoffice.create');
    }

    public function store(Request $request)
    {
        // FAIRE VALIDATION request validate
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->image = $request->input('image');
        $product->quantity = $request->input('quantity');
        $product->categories_id1 = $request->input('categories_id1');
        $product->save();

        return redirect('/backoffice');
    }

    public function edit($id)
    {
        // FAIRE VALIDATION request validate
        $product = Product::findOrFail($id);
        return view('backoffice.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->image = $request->input('image');
        $product->quantity = $request->input('quantity');
        $product->categories_id1 = $request->input('categories_id1');
        $product->save();

        return redirect()->route('backoffice');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/backoffice');
    }
}
