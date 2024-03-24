<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {   
        
        $classe = Auth::user()['classe'];
        $classe = Classe::find($classe)['nomclasse'];
        if (Auth::user()['poste'] == 1){
            return view('profil', ['classe' => $classe]);
        }
        if (Auth::user()['poste'] == 2){
            return view('profilEnseignant', ['classe' => $classe]);
        }
        if (Auth::user()['poste'] == 3){
            return view('profilResponsable', ['classe' => $classe]);
        }
    }

    public function modifMdp(){
        return view('modifMdp');
    } 

    public function changerMdp(Request $request){
        $newpassword2 = Hash::make($request->newpassword);
        User::where('email', Auth::user()['email'])->update(['password' => $newpassword2]);
    }
}
