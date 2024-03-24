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

Route::get('/', [\App\Http\Controllers\ConnexController::class, 'showLoginForm']) -> name('auth.login');
Route::post('/', [\App\Http\Controllers\ConnexController::class, 'login']) -> name('login');

Route::get('/inscription', [\App\Http\Controllers\InscriptionController::class, 'index']);
Route::post('/inscription', [\App\Http\Controllers\InscriptionController::class, 'addUser']);

Route::get('/profil', [\App\Http\Controllers\ProfilController::class, 'index']);

Route::get('modifMdp', [App\Http\Controllers\ProfilController::class, 'modifMdp']);
Route::post('modifMdp', [App\Http\Controllers\ProfilController::class, 'changerMdp']);

Route::get('/listeCreneauxEtudiant', [App\Http\Controllers\ListeCreneauxEtudiantController::class, 'index'])->name("listeCreneauxEtudiant");
Route::post('/listeCreneauxEtudiant', [App\Http\Controllers\ListeCreneauxEtudiantController::class, 'searchCreneaux']);
Route::post('/form2-submit', [App\Http\Controllers\ListeCreneauxEtudiantController::class, 'inscriptionKholle'])->name('form2.submit');

Route::get('/mesCreneauxEtudiant', [App\Http\Controllers\MesCreneauxEtudiantController::class, 'index']);
Route::post('/mesCreneauxEtudiant', [App\Http\Controllers\MesCreneauxEtudiantController::class, 'lookCreneaux'])->name('form.submit');

Route::get('/ajouterCreneau', [App\Http\Controllers\AjouterCreneauxController::class, 'index'])->name('ajouterCreneau');
Route::post('/ajouterCreneau', [App\Http\Controllers\AjouterCreneauxController::class, 'addCreneau']);

Route::get('/mesCreneauxEnseignants', [App\Http\Controllers\MesCreneauxProfController::class, 'index']) ->name("listeCreneauxEnseignants");
Route::post('/mesCreneauxEnseignants', [App\Http\Controllers\MesCreneauxProfController::class, 'lookCreneaux']);


Route::get('/modificationCreneaux', [\App\Http\Controllers\ModifCreneauController::class, 'index']);
Route::post('/modificationCreneaux', [\App\Http\Controllers\ModifCreneauController::class, 'lookCreneaux'])->name("regarde");
Route::post('/modificationCreneauxForm', [\App\Http\Controllers\ModifCreneauController::class, 'modifCreneauForm'])->name("modifCreneauForm");
Route::get('/modificationCreneauxForm', [\App\Http\Controllers\ModifCreneauController::class, 'modifCreneauFormAff']);

Route::get('/adminSearchUser', function (){
    return view('adminProfil');
})->name('adminSearchUser');

Route::post('/adminSearchUser', [App\Http\Controllers\AdminController::class, 'index']);

Route::get('/changePoste', [App\Http\Controllers\InfosUserAdminController::class, 'index']);

Route::post('/changePoste', [App\Http\Controllers\InfosUserAdminController::class, 'changePoste']);


Route::get('/logout', [\App\Http\Controllers\ConnexController::class, 'logout']);