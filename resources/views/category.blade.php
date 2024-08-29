@extends('layout')

@section('title', $category->name)

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <div class="row">
        @foreach($category->products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">{{ $product->price }} €</p>
                        <a href="/products/{{ $product->id }}" class="btn btn-primary">Voir le produit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
