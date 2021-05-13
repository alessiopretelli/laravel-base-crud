@extends('layouts.app')

@section('title', 'details')
    
@section('content')

    <div class="details">
        <img src="{{$dress['img']}}" alt="">
        <div class="details_info">
            <p>{{ $dress['type'] }}</p>
            <p>Color: {{ $dress['color'] }}</p>
            <p>Size: {{ $dress['size'] }}</p>
            <p>Price: {{ $dress['price'] }}$</p>    
        </div>
    </div>

    <a href="{{ route('products.index') }}">Turn back</a>

@endsection