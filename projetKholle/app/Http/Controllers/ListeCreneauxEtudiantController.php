<?php

namespace App\Http\Controllers;

use App\Models\Creneau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListeCreneauxEtudiantController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $matieres = \App\Models\Matiere::all();
            $creneaux = null;
            return view('listeCreneauxEtudiant', ['matieres' => $matieres], ['creneaux' => $creneaux]);
        }
    }

    public function searchCreneaux(Request $request){
        if (Auth::check()) {
            $matieres = \App\Models\Matiere::all();
            
            $creneaux = Creneau::select('creneaus.*')->where('creneaus.datecreneau', "=", $request->date)->where('creneaus.matiere', $request->matiere)->where("complet", 0)->where('creneaus.id_classe', Auth::user()['classe'])->get();
            return view('listeCreneauxEtudiant', ['creneaux' => $creneaux], ['matieres' => $matieres]);
        }
    }

    public function inscriptionKholle(Request $request){
        if (Auth::check()) {
            $matiere = \App\Models\Matiere::where('nommatiere', '=', $request->matiereCreneau)->get();
            $idmatiere = $matiere[0]->id;
            $creneaus = Creneau::where('id_etudiant', Auth::user()->id)->where('matiere', $idmatiere)->get();
            $count = $creneaus->count();
            if($count < 2){
                Creneau::where('id', $request->idCreneau)
                ->update([
                    'complet' => 1,
                    'id_etudiant' => Auth::user()['id'],
                ]);
                return view('listeCreneauxEtudiant');
            }
            $matieres = \App\Models\Matiere::all();
            $creneaux = null;
            return view('listeCreneauxEtudiant', ['matieres' => $matieres], ['creneaux' => $creneaux, 'error' => 'Vous vous êtes déjà incrit plus de 2 fois dans cette matière.']);
        }
    }
}
