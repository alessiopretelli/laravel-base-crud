@extends('layouts.app')

@section('title', 'products')

@section('content')

<h1>Our New Collection!</h1>
<a href="{{ route('products.create') }}">Add a new product</a>

<div class="products">
    @foreach ($products as $product)
    <div class="card">
        <p>Brand: {{$product['brand']}}</p>
        <p>Type: {{$product['type']}}</p>
        <p>Price: {{$product['price']}}$</p>
        <button><a href="{{ route('products.show', ['product' => $product['id']]) }}">details</a></button>
        <button><a href="{{ route('products.edit', ['product' => $product['id']]) }}">edit</a></button>

        <form class='form_delete' action="{{ route('products.destroy', ['product' => $product['id']]) }}" method="post">
            @csrf
            @method("DELETE")
            <button class="delete" type='submit'>delete</button>
        </form>
    </div>
    @endforeach
</div>

@endsection
