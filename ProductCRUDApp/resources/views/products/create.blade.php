@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <label for="image">Image:</label>
        <input type="file" name="image">
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
        <button type="submit">Create</button>
    </form>
@endsection
