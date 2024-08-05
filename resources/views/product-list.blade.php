{{--@extends('layout')--}}

{{--@section('title', 'Liste des produit')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}

{{--        <H1>Liste des produits</H1>--}}

{{--        --}}{{--        {{var_dump($products);}}--}}

{{--        <a href="products/by_name">--}}
{{--            <li>Trier par nom</li>--}}
{{--        </a>--}}
{{--        <a href="products/by_price">--}}
{{--            <li>Trier par prix</li>--}}
{{--        </a>--}}
{{--        <br>--}}
{{--        --}}

{{--        @foreach($products as $product)--}}
{{--            <a href="/products/{{$product -> id}}">--}}
{{--                <h2>{{$product -> name}}</h2>--}}
{{--                <img src="{{$product -> image}}" alt="stone image" width="200px">--}}
{{--                <p>Price:{{$product -> price}}</p>--}}
{{--            </a>--}}
{{--        @endforeach--}}

{{--    </div>--}}

{{--@endsection--}}

@extends('layout')

@section('title', 'Liste des produits')

@section('content')
    <div class="container">
        <h1>Liste des produits</h1>

        <!-- Liens de tri -->
        <div class="mb-4">
            <a href="{{ url('products/by_name') }}" class="btn btn-link">Trier par nom</a>
            <a href="{{ url('products/by_price') }}" class="btn btn-link">Trier par prix</a>
        </div>

        <!-- Grille de produits -->
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="/products/{{ $product->id }}">
                            <!-- Affiche l'image du produit -->
                            <img src="{{$product -> image}}" class="card-img-top"
                                 alt="{{ $product->name }}">
                        </a>
                        <div class="card-body">
                            <!-- Titre du produit -->
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <!-- Prix du produit -->
                            <p class="card-text">Price: {{ number_format($product->price, 2) }} €</p>
                            <!-- Lien vers la page de détails du produit -->
                            <a href="/products/{{ $product->id }}" class="btn btn-primary">Voir Détails</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection



