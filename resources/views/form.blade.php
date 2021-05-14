@extends('layouts.app')

@section('title', 'products')

@section('content')

<form action="{{route('products.store')}}" method="post">
    @csrf
    @method('POST')

    <label for="title">Brand</label>
    <input type="text" name="brand">

    <label for="content">Model</label>
    <input type="text" name="model">

    <label for="title">Type</label>
    <input type="text" name="type">

    <label for="title">Color</label>
    <input type="text" name="color">

    <label for="title">Price</label>
    <input type="number" name="price">

    <label for="title">Size</label>
    <input type="text" name="size">

    <label for="title">Description</label>
    <input type="text" name="description">

    <input type="submit" value="Send" id='send'>
</form>

@endsection