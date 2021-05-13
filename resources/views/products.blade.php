@extends('layouts.app')

@section('title', 'products')
    
@section('content')
    <h1>Our new collection!</h1>

    <div class="products">
        @foreach ($dresses as $dress)
            <div class="card">
                <img src="{{ $dress['img'] }}" alt="">
                <p>{{ $dress['type'] }}</p>
                <p>Price: {{ $dress['price'] }}$</p>
                <a href="{{ route('products.show', ['product' => $dress['id']]) }}">Details</a>
            </div>
        @endforeach    
    </div>
    <a href="{{ route('homepage') }}">Turn back</a>
@endsection