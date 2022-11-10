@extends('layouts.app')

@section('titre')
Sauver produit
@endsection

@section('contenu')
{!! Form::open(['action' => 'App\Http\Controllers\PagesController@modifierProduit']) !!}
{{-- <form action="{{ url('/sauverproduit') }}" method="POST" class="form_horizontal"> --}}
    {{ csrf_field() }}
    <div class="form-group">
        {{ Form::label('', 'Product') }}
        {{ Form::text('Product_name', $produit->Product_name, ['placeholder' => 'Product Name', 'class' =>
        'form-control'], 'required') }}
        {{--<label>Product</label>
        <input type="text" name="Product_name" placeholder="Product Name" class="form-control" required>--}}
    </div>
    <div class="form-group">
        {{ Form::label('', 'Product_price') }}
        {{ Form::number('Product_price', $produit->Product_price, ['placeholder' => 'Product Price', 'class' =>
        'form-control'], 'required')
        }}
        {{--<label>Product_price</label>
        <input type="number" name="Product_price" placeholder="Product Price" class="form-control" required>--}}
    </div>
    <div class="form-group">
        {{ Form::label('', 'Product description') }}
        {{ Form::textarea('Product_description', $produit->description, ['placeholder' => 'Product description', 'class'
        =>
        'form-control'], 'required') }}
        {{--<label>Product description</label>
        <textarea name="Product_description" cols="30" rows="10" class="form-control" required></textarea>--}}
    </div>
    {{ Form::submit('Modifier Produit', ['class' => 'btn btn-primary']) }}
    {{--<input type="submit" value="Ajouter Produit" class="btn btn-primary">--}}
    {!! Form::close() !!}
    {{--
</form>--}}
@endsection
