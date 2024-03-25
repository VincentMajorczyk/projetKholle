<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;
use App\Models\Creneau;
use App\Models\Matiere;
use Illuminate\Support\Facades\Auth;

class ModifCreneauController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $classes = \App\Models\Classe::all();
            $matieres = \App\Models\Matiere::all();
            $creneaux = null;
            return view('/modificationCreneaux', [
                'classes' => $classes,
                'matieres' => $matieres,
                'creneaux' => $creneaux
            ]);
        }
    }

    public function lookCreneaux(Request $request){
        if (Auth::check()) {
            $classes = \App\Models\Classe::all();
            $matieres = \App\Models\Matiere::all();
            $creneaux = Creneau::select('creneaus.*')->where('creneaus.datecreneau', "=", $request->date)->where("matiere", $request->matiere)->where("id_classe", $request->classe)->get();

            return view('/modificationCreneaux', [
                'classes' => $classes,
                'matieres' => $matieres,
                'creneaux' => $creneaux
            ]);
        }
    }

    public function modifCreneauForm(Request $request){
        if (Auth::check()) {
            $classes = \App\Models\Classe::all();
            $matieres = \App\Models\Matiere::all();
            $creneaux = Creneau::select('creneaus.*')->where('creneaus.datecreneau', "=", $request->date)->where("matiere", $request->matiere)->where("id_classe", $request->classe)->get();
            $classes = \App\Models\Classe::all();
            return view('/modificationCreneaux', [
                'classes' => $classes,
                'matieres' => $matieres,
                'creneaux' => $creneaux
            ]);
        }
    }

    public function modifCreneau(Request $request){
        if (Auth::check()) {
            $creneau = Creneau::select('creneaus.*')->where('creneaus.id', "=", $request->idCreneau)->get();
            
            foreach ($creneau as $c){
                $idclasse = $c->id_classe;
                $idsalle = $c->sallecreneau;
                $idmatiere = $c->matiere;
            }
            $classe = \App\Models\Classe::find($idclasse)['nomclasse'];
            $salle = \App\Models\Salle::find($idsalle)['nomsalle'];
            $matiere = Matiere::find($idmatiere)['nommatiere'];
            
            return view('/modifCreneauForm',  [
                'creneau' =>$creneau,
                'classe' => $classe,
                'salle' => $salle,
                'matiere' => $matiere,
            ]);
        }
    }


    public function updateCreneau(Request $request){
        if (Auth::check()) {
            $classe = Classe::where('nomclasse', '=', $request->classe)->get();
            $salle = \App\Models\Salle::where('nomsalle', '=', $request->salle)->get();
            $matiere = Matiere::where('nommatiere', '=', $request->matiere)->get();
            $idclasse = $classe[0]->id;
            $idsalle = $salle[0]->id;
            $idmatiere = $matiere[0]->id;
            \App\Models\Creneau::where('id', $request->id)->update([
                'id_classe' => $idclasse,
                'datecreneau' => $request->date,
                'heurecreneau' => $request->heure,
                'sallecreneau' => $idsalle,
                'duree' => $request->duree,
                'matiere' => $idmatiere
        ]);
        }
    }
}
