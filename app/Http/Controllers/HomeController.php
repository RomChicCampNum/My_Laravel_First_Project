<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
//    public function index()
//    {
//        $products = DB::select('select * from products limit 3');
//        return view('homepage', ['products' => $products]);
//    }
    public function index()
    {
        $categories = [
            (object)[
                'title' => 'Sneakers',
                'description' => 'Découvrez notre collection de sneakers tendance.',
                'image' => 'path/to/sneakers-image.jpg',
                'link' => '/category/sneakers'
            ],
            (object)[
                'title' => 'Chaussures de skate',
                'description' => 'Explorez notre gamme de chaussures de skate.',
                'image' => 'path/to/skate-shoes-image.jpg',
                'link' => '/category/skate-shoes'
            ],
            (object)[
                'title' => 'Chaussures de ville',
                'description' => 'Découvrez notre sélection de chaussures de ville élégantes.',
                'image' => 'path/to/dress-shoes-image.jpg',
                'link' => '/category/dress-shoes'
            ]
        ];

        return view('votre_vue', compact('categories'));
    }


}
