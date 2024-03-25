<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AddSalleController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('/addSalle');
        }
    }

    public function addSalle(Request $request){
        if (Auth::check()) {
            \App\Models\Salle::create([
                'nomsalle' => $request->nomSalle,
            ]);
            return view('/addSalle');
        }
    }
}
