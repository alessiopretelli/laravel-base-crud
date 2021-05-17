@extends('layouts.app')

@section('title', 'products')

@section('content')

<form action="{{route('products.update', ['product' => $product_to_update['id']])}}" method="post">
    @csrf
    @method('PUT')

    <label for="title">Brand</label>
    <input type="text" name="brand" value="{{$product_to_update -> brand}}">

    <label for="content">Model</label>
    <input type="text" name="model" value="{{$product_to_update -> model}}">

    <label for="title">Type</label>
    <input type="text" name="type" value="{{$product_to_update -> type}}">

    <label for="title">Color</label>
    <input type="text" name="color" value="{{$product_to_update -> color}}">

    <label for="title">Price</label>
    <input type="number" name="price" value="{{$product_to_update -> price}}">

    <label for="title">Size</label>
    <input type="text" name="size" value="{{$product_to_update -> size}}">

    <label for="title">Description</label>
    <input type="text" name="description" value="{{$product_to_update -> description}}">

    <input type="submit" value="Send" id='send'>
</form>

@endsection