<?php

namespace App\Http\Controllers;
use App\Models\Creneau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MesCreneauxProfController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $matieres = \App\Models\Matiere::all();
            $creneaux = null;
            return view('listeCreneauxEnseignants', ['matieres' => $matieres], ['creneaux' => $creneaux]);
        }
    }

    public function lookCreneaux(Request $request){
        if (Auth::check()) {
            $matieres = \App\Models\Matiere::all();
            $creneaux = Creneau::select('creneaus.*')->where('creneaus.datecreneau', "=", $request->date)->where("id_enseignant", Auth::user()['id'])->where("complet", 1)->where("matiere", $request->matiere)->get();
            return view('listeCreneauxEnseignants', ['creneaux' => $creneaux], ['matieres' => $matieres]);
        }
    }
}
