<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AjouterCreneauxController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $classes = \App\Models\Classe::all();
            $profs = \App\Models\User::all()->where('poste', 2);
            $salles = \App\Models\Salle::all();
            $matieres = \App\Models\Matiere::all();
            $good = null;
            return view('ajouterCreneau', [
                'classes' => $classes,
                'profs' => $profs,
                'salles' => $salles,
                'matieres' => $matieres,
                'add' => $good
            ]);
        }
    }

    public function addCreneau(Request $request){
        if (Auth::check()) {
            \App\Models\Creneau::create([
                'id_enseignant' => $request->nomKholler,
                'id_classe' => $request->classe,
                'datecreneau' => $request->datecreneau,
                'heurecreneau' => $request->heurecreneau,
                'sallecreneau' => $request->salle,
                'duree' => $request->duree,
                'matiere' => $request->matiere,
                'complet' => 0,
            ]);
            $classes = \App\Models\Classe::all();
            $profs = \App\Models\User::all()->where('poste', 2);
            $salles = \App\Models\Salle::all();
            $matieres = \App\Models\Matiere::all();
            $good = "Ajout effectué";
            return view('ajouterCreneau', [
                'classes' => $classes,
                'profs' => $profs,
                'salles' => $salles,
                'matieres' => $matieres,
                'add' => $good
            ]);
        }
    }
}
