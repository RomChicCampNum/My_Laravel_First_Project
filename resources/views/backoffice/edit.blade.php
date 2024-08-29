@extends('backoffice.layout')@section('title', 'Modifier le produit')

@section('content')
    <h1>Modifier le produit</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('backoffice.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}">
        </div>

        <div class="form-group">
            <label for="weight">Poids</label>
            <input type="number" name="weight" class="form-control" value="{{ old('weight', $product->weight) }}">
        </div>

        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="url" name="image" class="form-control" value="{{ old('image', $product->image) }}">
        </div>

        <div class="form-group">
            <label for="quantity">Quantité</label>
            <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity) }}">
        </div>

        <div class="form-group">
            <label for="categories_id1">Catégorie</label>
            <input type="number" name="categories_id1" class="form-control"
                   value="{{ old('categories_id1', $product->categories_id1) }}">
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection
