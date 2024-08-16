@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $product->title }}" required>
        <label for="image">Image:</label>
        <input type="file" name="image">
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100">
        @endif
        <label for="description">Description:</label>
        <textarea name="description">{{ $product->description }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
