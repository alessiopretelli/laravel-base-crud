@extends('layouts.app')

@section('title', 'products')

@section('content')

<h1>Our New Collection!</h1>

<div class="products">
    @foreach ($products as $product)
    <div class="card">
        <p>Brand: {{$product['brand']}}</p>
        <p>{{$product['type']}}</p>
        <p>{{$product['price']}}$</p>
        <a href="{{ route('products.show', ['product' => $product['id']]) }}">details</a>
    </div>
    @endforeach
</div>

@endsection
