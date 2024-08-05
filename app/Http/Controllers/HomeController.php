<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mappe les identifiants de catégorie aux noms de catégorie
        $categoriesMap = [
            1 => 'Chaussures de Sport',
            2 => 'Sneakers',
            3 => 'Chaussures de Ville'
        ];

        // Récupère un produit aléatoire pour chaque catégorie
        $categories = collect($categoriesMap)->map(function ($categoryName, $categoryId) {
            $product = Product::where('categories_id1', $categoryId)
                ->inRandomOrder() // Sélectionne un produit aléatoire
                ->first(); // Récupère le premier produit trouvé

            // Retourne un objet avec les propriétés attendues
            return (object)[
                'title' => $categoryName,
                'description' => $product ? $product->description : 'Aucune description disponible',
                'image' => $product ? $product->image : 'path/to/default-image.jpg', // Remplace par une image par défaut si aucun produit n'est trouvé
                'link' => $product ? $product->id : '#'
            ];
        });

        return view('homepage', compact('categories'));
    }

}
