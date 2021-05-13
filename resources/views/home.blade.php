@extends('layouts.app')

@section('title', 'homepage')
    
@section('content')
    <h1>Welcome to our shop!</h1>
    <a href="{{ route('products.index') }}">Our products :)</a>
@endsection