@extends('layout')
@section('title', 'Mon Panier')

@section('content')
    <div class="container">
        <div class="border-cart">
            <table>
                <tr>
                    <th>Produit</th>
                    <th></th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                @include('partial-cart')
            </table>
        </div>
    </div>
@endsection
