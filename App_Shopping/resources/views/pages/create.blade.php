@extends('layouts.app')

@section('titre')
Sauver produit
@endsection

@section('contenu')
<form action="{{ url('/sauverproduit') }}" method="POST" class="form_horizontal">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Product</label>
        <input type="text" name="product_name" placeholder="Product Name" class="form-control">
    </div>
    <div class="form-group">
        <label>Product_price</label>
        <input type="text" name="Product_price" placeholder="Product Price" class="form-control">
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea name="Product_description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <input type="submit" value="Ajouter Produit" class="btn btn-primary">
</form>
@endsection
