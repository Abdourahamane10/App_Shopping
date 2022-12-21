@extends('layouts.app')

@section('titre')
Services
@endsection

@section('contenu')
<h1>Détails du produit</h1>
<hr>
<p>{{ $produit->description }}</p>
<p>€ {{ $produit->Product_price }}</p>
<p>Crée le {{ $produit->created_at }}</p>
<hr>
<a href="/edit/{{ $produit->id }}" class="btn btn-default">Edit</a>
<a href="/delete/{{ $produit->id }}" class="btn btn-danger">Delete</a>

@endsection
