@extends('layout')
@section('title', 'Ma Boutique Laravel')

@section('content')
    {{--    <h1>Ma Boutique Laravel</h1>--}}
    {{--    <br><br>--}}
    {{--    <div class="row">--}}
    {{--        @foreach($categories as $category)--}}
    {{--            <div class="col-md-4">--}}
    {{--                <div class="card">--}}
    {{--                    <img src="{{$category->image}}" class="card-img-top" alt="{{$category->title}}">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h5 class="card-title">{{$category->title}}</h5>--}}
    {{--                        <p class="card-text">{{$category->description}}</p>--}}
    {{--                        <a href="{{$category->link}}" class="btn btn-primary">Découvrir</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <br><br>--}}
    {{--    @endforeach--}}
    {{--    </div>--}}
    <h1>Ma Boutique Laravel</h1>
    <br><br>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4">
                <div class="card">
                    <!-- Affiche l'image en utilisant le chemin stocké dans la base de données -->
                    <a href="/products/{{ $category->link }}">
                        <img src="{{$category -> image}}" class="card-img-top" alt="{{ $category->title }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->title }}</h5>
                        <p class="card-text">{{ $category->description }}</p>
                        <a href="/products/{{ $category->link }}" class="btn btn-primary">Découvrir</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
    <br><br> <br><br>
@endsection
