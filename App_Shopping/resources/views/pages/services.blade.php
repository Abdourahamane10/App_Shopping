@extends('layouts.app')

@section('titre')
Services
@endsection

@section('contenu')
<h1>Bienvenu dans la page Services</h1>
@foreach ($produits as $produit)
<div class="well">
    <h1><a href="/show/{{ $produit->id }}"> {{ $produit->Product_name }}</a></h1>
</div>
@endforeach
{{ $produits->links() }}

@endsection
