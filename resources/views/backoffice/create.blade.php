@extends('backoffice.layout')
@section('title', 'Ajouter un produit')

@section('content')
    <h1>Ajouter un produit</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/backoffice') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}">
        </div>

        <div class="form-group">
            <label for="weight">Poids</label>
            <input type="number" name="weight" class="form-control" value="{{ old('weight') }}">
        </div>

        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="url" name="image" class="form-control" value="{{ old('image') }}">
        </div>

        <div class="form-group">
            <label for="quantity">Quantité</label>
            <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
        </div>

        <div class="form-group">
            <label for="categories_id1">Catégorie</label>
            <input type="number" name="categories_id1" class="form-control" value="{{ old('categories_id1') }}">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection

