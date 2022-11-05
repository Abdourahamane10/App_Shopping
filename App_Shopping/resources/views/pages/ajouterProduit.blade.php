@extends('layouts.app')

@section('titre')
Sauver produit
@endsection

@section('contenu')
@if (Session::has('message'))
<p class="alert alert-success">
    {{ Session::get('message') }}
    {{ Session::put('message', null) }}
</p>
@endif
<form action="{{ url('/sauverproduit') }}" method="POST" class="form_horizontal">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Product</label>
        <input type="text" name="Product_name" placeholder="Product Name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Product_price</label>
        <input type="text" name="Product_price" placeholder="Product Price" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea name="Product_description" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <input type="submit" value="Ajouter Produit" class="btn btn-primary">
</form>
@endsection
