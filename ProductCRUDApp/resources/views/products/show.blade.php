@extends('layouts.app')

@section('content')
    <h1>{{ $product->title }}</h1>
    @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="200">
    @endif
    <p>{{ $product->description }}</p>
    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('products.index') }}">Back to Products</a>
@endsection
