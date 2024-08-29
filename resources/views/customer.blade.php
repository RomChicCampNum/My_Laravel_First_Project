@extends('layout')

@section('title', $customer->name)

@section('content')
    <h1>{{ $customer->name }}</h1>
    <p>{{ $customer->email }}</p>

    <h2>Orders</h2>
    <ul>
        @foreach($customer->orders as $order)
            <li>
                Order #{{ $order->id }} - Total: {{ $order->total }} € - Status: {{ $order->status }}
                <ul>
                    @foreach($order->products as $product)
                        <li>{{ $product->name }} - {{ $product->pivot->quantity }} pcs</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
