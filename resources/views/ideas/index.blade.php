@extends('layout.layout')
@section('content')
    <h1>Sample Products page</h1>

    @foreach ($products as $product)
        <div class="mb-10">
            <h2>{{ $product['name'] }}</h2>
            <p>{{ $product['description'] }}</p>
            <h4> {{ $product['price'] }}</h4>
            <h5>{{ $product['created_at'] }}</h5>
        </div>
    @endforeach
@endsection
