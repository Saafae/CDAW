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
    return view('auth'); })->name('auth');

Route::get('/homeco', function () {
    return view('homeco'); })->name('homeco');

Route::get('/homedisc', function () {
    return view('homedisc'); })->name('homedisc');

Route::get('profile', function () {
    return view('profile'); })->name('profile');

Route::get('tableau', function () {
    return view('tableau'); })->name('tableau');

<<<<<<< HEAD
Route::get('/history', function () {
    return view('historique'); })->name('history');

Route::get('admins', function () {
    return view('admins'); })->name('admins');


=======
>>>>>>> 534038f9ee6bed642234419897fddce2c77c7be1
/*Route::get('/', function () {
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
});*/





Route::get('formu', function () {
    return view('formulaire');
})->name('formu');

Route::get('formuUp/{film}', function (int $id) {
    return view('formulaireUpdate',['id'=>$id]);
})->name('formuUp');

Route::get('info', function () {
    return view('info')->name(info);
});

Route::post('film', 'App\Http\controllers\listeMediasController@addFilm');

Route::get('tableau', 'App\Http\controllers\listeMediasController@getListeMedias')->name('tableau');

Route::get('film/{film}', 'App\Http\controllers\listeMediasController@getFilmById')->name('film');

Route::put('formuUp/film/{id}', 'App\Http\controllers\listeMediasController@updateFilm')->name('updatefilm');

<<<<<<< HEAD
Route::delete('film/{film}', 'App\Http\controllers\listeMediasController@destroy')->name('films.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
=======
Route::delete('film/{film}', 'App\Http\controllers\listeMediasController@destroy')->name('films.destroy');
>>>>>>> 534038f9ee6bed642234419897fddce2c77c7be1
