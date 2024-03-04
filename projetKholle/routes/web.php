<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', function (){
    return view('inscription');
});

Route::get('/profil', function (){
    return view('profil');
});

Route::get('/listeCreneauxEtudiant', function (){
    return view('listeCreneauxEtudiant');
});

Route::get('/ajouterCreneau', function (){
    return view('ajouterCreneau');
});

Route::get('/listeCreneauxEnseignants', function (){
    return view('listeCreneauxEnseignants');
});

Route::get('/mesCreneauxEtudiant', function (){
    return view('mesCreneauxEtudiant');
});

Route::get('/mesCreneauxEtudiant', function (){
    return view('mesCreneauxEtudiant');
});

Route::get('/modificationCreneaux', function (){
    return view('modificationCreneaux');
});