@extends('layout')

@section('title', 'Liste des produit')

@section('content')
    <div class="container">

        <H1>Liste des produits</H1>

        {{--        {{var_dump($products);}}--}}

        @foreach($products as $product)
            <a href="/product/{{$product -> id}}">
                <h2>{{$product -> name}}</h2>
                <img src="{{$product -> image}}" alt="stone image" width="200px">
                <p>Price:{{$product -> price}}</p>
            </a>
        @endforeach

    </div>

@endsection





