<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/categ', 'App\Http\Controllers\listeMediasController@getcategory');



Route::get('/auth', function () {
    return view('auth');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/listeFilms', function () {
    return "Liste des films";
});


Route::get('/{nom}/{prenom}', function($nom, $prenom) {
    return "Welcome $nom $prenom";
});

Route::get('/{titre}', function($titre) {
    return "Welcome $titre";
})->where('titre','[a-zA-z]+');

Route::get('/long', function () {
    return view('long');
});
