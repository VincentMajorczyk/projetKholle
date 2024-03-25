<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request){
        if (Auth::check()) {
        $user = \App\Models\User::select('users.id', 'users.nom', 'users.prenom', 'users.email', 'postes.nomposte', 'classes.nomclasse')
        ->join('classes', 'users.classe', '=', 'classes.id')
        ->join('postes', 'users.poste', '=', 'postes.id')
        ->where('users.email', '=', $request->email)
        ->get();
        $request->session()->put('mailUserChangerPoste', $request->email);
        return view("infosUser", ['user' => $user]);
        }
    }
}
