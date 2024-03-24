<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request){
        $user = \App\Models\User::select('users.id', 'users.nom', 'users.prenom', 'users.email', 'postes.nomposte', 'classes.nomclasse')
        ->join('classes', 'users.classe', '=', 'classes.id')
        ->join('postes', 'users.poste', '=', 'postes.id')
        ->where('users.email', '=', $request->email)
        ->get();
        //dd($user);
        $request->session()->put('mailUserChangerPoste', $request->email);
        return view("infosUser", ['user' => $user]);
    }
}
