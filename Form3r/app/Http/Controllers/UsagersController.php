<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Usager;
use Illuminate\View\View;
use Illuminate\Auth\Middleware;
use DB;
use Session;
use Validator;

class UsagersController extends Controller
{

    public function login(Request $request) : RedirectResponse
    {   
        $credentials = Validator::make($request->all(), [
            'matricule' => ['required', 'numeric', 'digits_between:7,7'],
            'motdepasse' => ['required']
        ]);

        if ($credentials->fails()){
            return redirect()->route('connexion')->withErrors($credentials)->withInput();
        } else {
            $user = Usager::where([['matricule', '=', $request->matricule], ['mdp', $request->motdepasse]])->first();
            if(!$user) {
                return back()->withErrors(['error' => 'Ces identifiants sont invalides.']);
            } else {
                $request->session()->regenerate();

                Session::put('user', $user);
                Session::put('username', $user->prenom.$user->nom);

                return redirect()->route('dashboard', ['username'=>Session::get('username')]);     
            }
        } 
    } 


    public function logout(Request $request) : RedirectResponse {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('connexion');
    }
}
