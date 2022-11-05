<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /*
    Fonction qui redirige vers la page d'accueil
    */
    public function home()
    {
        return view('pages/home');
    }

    /*
    Fonction qui redirige vers la page apropos
    */
    public function apropos()
    {
        return view('pages/apropos');
    }

    /*
    Fonction qui affiche la liste des produits
    */
    public function services()
    {
        $produits = DB::table('Products')
            ->orderBy('Product_name', 'asc')
            ->paginate(1);
        return view('pages/services')->with('produits', $produits);
    }

    /*
    Fonction qui affiche les details d'un produit
    */
    public function show($id)
    {
        $produit = DB::table('Products')->where('id', $id)->first();
        return view('pages.show')->with('produit', $produit);
    }

    /*
    Fonction qui affiche le formulaire de création d'un produit
    */
    public function creer()
    {
        return view('pages.ajouterProduit');
    }

    /*
    Fonction permettant d'enregistrer les produits dans la base de données
    */
    public function create(Request $request)
    {
        $produit = new Product();
        $produit->Product_name = $request->Product_name;
        $produit->Product_price = $request->Product_price;
        $produit->description = $request->Product_description;
        $produit->save();
    }
}
