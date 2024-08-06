@extends('backoffice.layout')

@section('title', 'Ajouter un produit')

@section('content')
    <h1>Ajouter un produit</h1>

    <form action="{{route('backoffice.create')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Poids</label>
            <input type="number" class="form-control" id="weight" name="weight" step="0.01">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">URL de l'image</label>
            <input type="text" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantité</label>
            <input type="number" class="form-control" id="quantity" name="quantity" step="0">
        </div>
        <div class="mb-3">
            <label for="categories_id1" class="form-label">Catégorie</label>
            <input type="number" class="form-control" id="categories_id1" name="categories_id1" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
