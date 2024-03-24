<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Creneau;
use Illuminate\Support\Facades\Auth;

class ModifCreneauController extends Controller
{
    public function index(){
        $classes = \App\Models\Classe::all();
        $matieres = \App\Models\Matiere::all();
        $creneaux = null;
        return view('/modificationCreneaux', [
            'classes' => $classes,
            'matieres' => $matieres,
            'creneaux' => $creneaux
        ]);
    }

    public function lookCreneaux(Request $request){
        $classes = \App\Models\Classe::all();
        $matieres = \App\Models\Matiere::all();
        $creneaux = Creneau::select('creneaus.*')->where('creneaus.datecreneau', "=", $request->date)->where("matiere", $request->matiere)->where("id_classe", $request->classe)->get();

        return view('/modificationCreneaux', [
            'classes' => $classes,
            'matieres' => $matieres,
            'creneaux' => $creneaux
        ]);
    }

    public function modifCreneauForm(Request $request){
        $classes = \App\Models\Classe::all();
        dd($classes);
    }
}
