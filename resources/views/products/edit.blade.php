@extends('layout.app')
@section('title', 'edit a product')

@section('content')

    <h1>Edit a product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $product->description }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" name="image" id="image" class="form-control" value="{{ $product->image }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
