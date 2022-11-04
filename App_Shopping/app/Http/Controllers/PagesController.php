<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages/home');
    }

    public function apropos()
    {
        return view('pages/apropos');
    }

    public function services()
    {
        $produits = DB::table('Products')
            ->orderBy('Product_name', 'asc')
            ->paginate(1);
        return view('pages/services')->with('produits', $produits);
    }

    public function show($id)
    {
        $produit = DB::table('Products')->where('id', $id)->first();
        return view('pages.show')->with('produit', $produit);
    }
}
