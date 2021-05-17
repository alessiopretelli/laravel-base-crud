@extends('layouts.app')

@section('title', 'details')

@section('content')

<div class="product_details">
    <p>Id: {{$product['id']}}</p>
    <p>{{$product['brand']}} {{$product['model']}}</p>
    <p>Color: {{$product['color']}}</p>
    <p>Size: {{$product['size']}}</p>
    <p>Price: {{$product['price']}}$</p>
    <p>Description: {{$product['description']}}</p>
</div>

@endsection
