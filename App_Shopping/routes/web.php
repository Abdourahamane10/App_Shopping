<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\Http\Controllers\PagesController@home');

Route::get('/apropos', 'App\Http\Controllers\PagesController@apropos');

Route::get('/services', 'App\Http\Controllers\PagesController@services');

Route::get('/show/{id}',  'App\Http\Controllers\PagesController@show');

Route::get('/create', 'App\Http\Controllers\PagesController@creer');

Route::post('/sauverproduit', 'App\Http\Controllers\PagesController@create');

Route::get('/edit/{id}', 'App\Http\Controllers\PagesController@edit');

Route::post('/ModifierProduit', 'App\Http\Controllers\PagesController@modifierProduit');

Route::get('/delete/{id}', 'App\Http\Controllers\PagesController@delete');
