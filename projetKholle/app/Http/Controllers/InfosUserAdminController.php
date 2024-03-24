<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfosUserAdminController extends Controller
{
    public function index(){
        $postes = \App\Models\Poste::all();
        return view("changePoste", ['postes' => $postes]);
    }

    public function changePoste(Request $request){
        $newPoste = $request->poste;
        $mail = $request->session()->get('mailUserChangerPoste');
        
        \App\Models\User::where('email', $mail)->update(['poste' => $newPoste]);
        return redirect('adminSearchUser');
    }
}
