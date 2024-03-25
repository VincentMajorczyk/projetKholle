<?php

namespace App\Http\Controllers;
use App\Models\Creneau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MesCreneauxEtudiantController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $creneaux = null;
            return view("mesCreneauxEtudiant", ['creneaux' => $creneaux]);
        }
    }

    public function lookCreneaux(Request $request){
        if (Auth::check()) {
            $creneaux = Creneau::select('creneaus.*')->where('creneaus.datecreneau', "=", $request->date)->where("id_etudiant", Auth::user()['id'])->get();
            return view('mesCreneauxEtudiant', ['creneaux' => $creneaux]);
        }
    }
}
