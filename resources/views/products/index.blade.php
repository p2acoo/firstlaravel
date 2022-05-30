@extends('layout.app')
@section('title', 'Liste des produits')

@section('content')
    <h1> LES PRODUITS </h1>
    @foreach ($products as $product)
    <strong> {{ $product->name }} </strong>
    <p> {{ $product->description }} </p>
    <p> {{ $product->price }} €</p>
    <p> {{ $product->created_at }} </p>
    <p> {{ $product->updated_at }} </p>
    <a href="{{ route('products.show', $product->id) }}"> Voir le produit </a>
    <hr>
    @endforeach
@endsection
