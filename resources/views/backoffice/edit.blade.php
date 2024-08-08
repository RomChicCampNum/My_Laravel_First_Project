@extends('backoffice.layout')

@section('title', 'Modifier un produit')

@section('content')
    <h1>Modifier le produit</h1>

    <form action="{{route('backoffice.update' ,$product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"
                      required>{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ $product->price }}"
                   required>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Poids</label>
            <input type="number" class="form-control" id="weight" name="weight" step="0.01"
                   value="{{ $product->weight }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">URL de l'image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantité</label>
            <input type="number" class="form-control" id="quantity" name="quantity" step="0">
        </div>
        <div class="mb-3">
            <label for="categories_id1" class="form-label">Catégorie</label>
            <input type="number" class="form-control" id="categories_id1" name="categories_id1"
                   value="{{ $product->categories_id1 }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>


@endsection
