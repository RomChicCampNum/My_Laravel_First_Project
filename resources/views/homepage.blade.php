@extends('layout')
@section('title', 'Ma Boutique Laravel')

@section('content')
    <h1>Ma Boutique Laravel</h1>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{$category->image}}" class="card-img-top" alt="{{$category->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->title}}</h5>
                        <p class="card-text">{{$category->description}}</p>
                        <a href="{{$category->link}}" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
