<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AddMatiereController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('addMatiere');
        }
    }

    public function addMatiere(Request $request){
        if (Auth::check()) {
            \App\Models\Matiere::create([
                'nommatiere' => $request->nomMatiere,
            ]);
            return view('addMatiere');
        }
    }


}
