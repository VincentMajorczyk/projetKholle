<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Classe;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $classes = \App\Models\Classe::all();
            return view('inscription', ['classes' => $classes]);
        }
    }
    
    public function addUser(RegisterRequest $request){
        if (Auth::check()) {
            $user = \App\Models\User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'classe' => $request->classe,
                'password' => Hash::make($request->password),
                'nbkholleinscr' => 0,
            ]);
            auth()->login($user);
            return redirect('/');
        }
    }
}
