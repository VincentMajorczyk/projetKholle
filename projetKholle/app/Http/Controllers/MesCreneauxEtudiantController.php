<?php

namespace App\Http\Controllers;
use App\Models\Creneau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MesCreneauxEtudiantController extends Controller
{
    public function index(){
        $creneaux = null;
        return view("mesCreneauxEtudiant", ['creneaux' => $creneaux]);
    }

    public function lookCreneaux(Request $request){
        $creneaux = Creneau::select('creneaus.*')->where('creneaus.datecreneau', "=", $request->date)->where("id_etudiant", Auth::user()['id'])->get();
        //dd($creneaux, $request->date, Auth::user()['id']);
        return view('mesCreneauxEtudiant', ['creneaux' => $creneaux]);
    }
}
