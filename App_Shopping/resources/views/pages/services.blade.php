@extends('layouts.app')

@section('titre')
Services
@endsection

@section('contenu')
<h1>Bienvenu dans la page Services</h1>
@if (Session::has('message'))
<p class="alert alert-success">
    {{ Session::get('message') }}
    {{ Session::put('message', null) }}
</p>
@endif
@foreach ($produits as $produit)
<div class="well">
    <h1><a href="/show/{{ $produit->id }}"> {{ $produit->Product_name }}</a></h1>
</div>
@endforeach
{{ $produits->links() }}

@endsection
