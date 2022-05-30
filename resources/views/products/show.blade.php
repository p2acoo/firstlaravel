@extends('layout.app')
@section('title', strtoupper($product->name))
@section('content')
<h1> Le produit {{ $product->name }}</h1>
<p> {{ $product->description }} </p>
<p> {{ $product->price }} €</p>
<img src='{{ $product->image }}' alt="default.png">
<p> {{ $product->created_at }} </p>
<p> {{ $product->updated_at }} </p>
<a href="{{ route('products.index') }}"> Retour à la liste des produits </a>
@endsection


