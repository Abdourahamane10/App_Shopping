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

@endsection
