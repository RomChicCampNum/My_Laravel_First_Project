@extends('backoffice.layout')

@section('title', 'Liste des produits')

@section('content')
    <h1>Liste des produits</h1>

    <div class="d-flex justify-content-end mb-3">
        <a href="/backoffice/product/create" class="btn btn-success">Ajouter un produit</a>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th><a href="/backoffice?sort=id&order={{ $sortOrder === 'asc' ? 'desc' : 'asc' }}">ID</a></th>
            <th><a href="/backoffice?sort=name&order={{ $sortOrder === 'asc' ? 'desc' : 'asc' }}">Nom</a></th>
            <th><a href="/backoffice?sort=description&order={{ $sortOrder === 'asc' ? 'desc' : 'asc' }}">Description</a>
            </th>
            <th><a href="/backoffice?sort=price&order={{ $sortOrder === 'asc' ? 'desc' : 'asc' }}">Prix</a></th>
            <th>Image</th>
            <th>
                <a href="/backoffice?sort=categories_id1&order={{ $sortOrder === 'asc' ? 'desc' : 'asc' }}">Catégorie</a>
            </th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td>{{ $product->price }} €</td>
                <td>
                    <img src="{{ $product->image }}" alt="Product Image" width="100" class="img-thumbnail">
                </td>
                <td>{{ $product->categories_id1 }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Actions">
                        <a href="/backoffice/product/{{ $product->id }}/edit" class="btn btn-primary btn-sm me-2">Modifier</a>
                        <form action="/backoffice/product/{{ $product->id }}/delete" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
