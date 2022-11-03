@extends('layouts.app')

@section('titre')
Services
@endsection

@section('contenu')
<h1>Bienvenu dans la page Services</h1>
@foreach ($produits as $produit)
<div class="well">
    <h1>{{ $produit->Product_name }}</h1>
</div>
@endforeach
{{ $produits->links() }}

@endsection
