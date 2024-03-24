<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User;

class ConnexController extends Controller
{
    public function showLoginForm()
    {
        return view('welcome');
    }


    // Processus de login
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        
        if (Auth::attempt($credentials)) {
            $userPoste = Auth::user()['poste'];
            // Authentication réussie
            $request->session()->regenerate();
            if($userPoste == 1){
                return redirect()->intended(route("listeCreneauxEtudiant"));
            }
            if($userPoste == 2){
                return redirect()->intended(route("listeCreneauxEnseignants"));
            }
            if($userPoste == 3){
                return redirect()->intended(route("ajouterCreneau"));
            }
        }

        // Si l'authentification échoue, redirigez l'utilisateur vers le formulaire de login avec un message d'erreur
        return redirect()->back()->withErrors(['error' => 'Email ou mot de passe incorrect.']);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->intended(route('login'));
    }
}
