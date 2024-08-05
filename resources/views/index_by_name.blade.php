@extends('layout')

@section('title', 'Produits par noms')

@section('content')

    <div class="container">

        <h1>Liste des Produits Triés par Nom</h1>
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->name }} - {{ number_format($product->price, 2) }} €</li>
            @endforeach
        </ul>
    </div>

@endsection
