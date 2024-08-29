<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

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
        $messages = [
            'name.required' => 'Le nom du produit est obligatoire.',
            'price.required' => 'Le prix du produit est obligatoire.',
            'price.min' => 'Le prix du produit ne peut pas être négatif.',
            'weight.required' => 'Le poids du produit est obligatoire.',
            'weight.min' => 'Le poids du produit ne peut pas être négatif.',
            'image.required' => 'L\'URL de l\'image est obligatoire.',
            'quantity.required' => 'La quantité est obligatoire.',
            'quantity.min' => 'La quantité ne peut pas être négative.',
            'categories_id1.required' => 'La catégorie est obligatoire.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'image' => 'required|url|max:255',
            'quantity' => 'required|integer|min:0',
            'categories_id1' => 'required|integer',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('backoffice.create')
                ->withErrors($validator)
                ->withInput();
        }

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

        $product = Product::findOrFail($id);
        return view('backoffice.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'name.required' => 'Le nom du produit est obligatoire.',
            'price.required' => 'Le prix du produit est obligatoire.',
            'price.min' => 'Le prix du produit ne peut pas être négatif.',
            'weight.required' => 'Le poids du produit est obligatoire.',
            'weight.min' => 'Le poids du produit ne peut pas être négatif.',
            'image.required' => 'L\'URL de l\'image est obligatoire.',
            'quantity.required' => 'La quantité est obligatoire.',
            'quantity.min' => 'La quantité ne peut pas être négative.',
            'categories_id1.required' => 'La catégorie est obligatoire.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'image' => 'required|url|max:255',
            'quantity' => 'required|integer|min:0',
            'categories_id1' => 'required|integer',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('backoffice.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $product = Product::findOrFail($id);
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

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/backoffice');
    }
}
