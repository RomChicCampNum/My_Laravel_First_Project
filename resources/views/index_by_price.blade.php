@extends('layout')

@section('title', 'Produits par prix')

@section('content')

    <div class="container">

        <h1>Liste des Produits Triés par Prix</h1>
        <ul>
            @foreach ($products as $product)
                <a href="/products/{{$product -> id}}">
                    <li>{{ $product->name }} - {{ number_format($product->price, 2) }} €</li>
                </a>
            @endforeach

        </ul>
    </div>

@endsection
