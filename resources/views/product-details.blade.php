@extends('layout')

@section('title', 'Détails du produit')

@section('content')
    <div class="container">
        <h1>Détails du produit</h1>
        <!-- Votre contenu ici -->

        <h2>{{$products->name}}</h2>
        <img src="{{$products->image}}" alt="stone image" width="200px">
        <p>{{$products->description}}</p>
        <p>Price:{{$products->price}}</p>


        <div class="col-md-6">
            <form action="{{ url('/cart') }}" method="post">
                <input type="number" name="quantity" id="quantity" class="mb-3">
                <input type="submit" value="Ajouter au panier">
            </form>
        </div>
    </div>
@endsection
