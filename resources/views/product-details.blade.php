@extends('layout')

@section('title', 'Détails du produit')

@section('content')
    {{--    <div class="container">--}}
    {{--        <h1>Détails du produit</h1>--}}
    {{--        <!-- Votre contenu ici -->--}}

    {{--        <h2>{{$product->name}}</h2>--}}
    {{--        <img src="{{$product->image}}" alt="stone image" width="200px">--}}
    {{--        <p>{{$product->description}}</p>--}}
    {{--        <p>Prix : {{$product->price}}</p>--}}


    {{--        <div class="col-md-6">--}}
    {{--            <form action="{{ url('/cart') }}" method="post">--}}
    {{--                <input type="number" name="quantity" id="quantity" class="mb-3">--}}
    {{--                <input type="submit" value="Ajouter au panier">--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="container mt-5">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{ $product->image }}" class="card-img" alt="{{ $product->name }}">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h1 class="card-title">{{ $product->name }}</h1>
                        <p class="card-text">{{ $product->description }}</p>
                        <h3 class="card-text text-success">Prix : {{ number_format($product->price, 2) }} €</h3>
                        <form action="{{ url('/cart') }}" method="post" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <label for="quantity">Quantité</label>
                                <input type="number" name="quantity" id="quantity" class="form-control mb-3" min="1"
                                       value="1">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Ajouter au panier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
