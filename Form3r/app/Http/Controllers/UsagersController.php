<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use App\Models\Usager;
use Illuminate\View\View;
use Illuminate\Auth\Middleware;
use Auth;
use DB;
use Session;
use Validator;

class UsagersController extends Controller
{
    public function login(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'inputMatricule' => 'required|numeric|digits_between:7,7',
            'inputPassword' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors(['invalide' => 'Vos identifiants sont erronés ou invalides. Réessayez de nouveau ou contactez un administrateur.']);
        }
        else {
            $user = Usager::where([['matricule','=',$request->inputMatricule], ['mdp',$request->inputPassword]])->first();
            if(!$user)
            {
                return back()->withErrors(['invalide' => 'Vos identifiants sont erronés ou invalides.']);
            }
            else
            {
                Session::put('id', $user->id);
                Session::put('prenom', $user->prenom);
                Session::put('nom', $user->nom);
                $username = $user->prenom.$user->nom;
                return redirect()->route('formulaires.index', ['username'=> $username]);
            }
        }
    }

    public function logout() {
        session()->flush();
        return redirect()->route('connexion');
    }
}
