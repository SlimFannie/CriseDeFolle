<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Usager;
use App\Models\Formulaire;
use Illuminate\View\View;
use Illuminate\Auth\Middleware;
use DB;
use Session;
use Validator;

class FormulairesController extends Controller
{
    
    public function index() {
        $usager = Usager::find(Session::get('user.id'));
        $formulaires = $usager->formulaires;


        return View('welcome', ['formulaires'=>$formulaires]);
    }

    // Accident de travail

    public function accident() {
        $superieurs = Usager::where('superieur', true)->get();
        return view('formulaires.accident', ['username'=>Session::get('username'), 'superieurs'=>$superieurs]);
    }

    public function storeAccident(Request $request): RedirectResponse {
        $validator = Validator::make($request->all(), [
            'fonction' => ['required'],
            'dateHeure' => ['required'],
            'endroit' => ['required'],
            'endroitBlessure' => ['required'],
            'descriptionBlessure' => ['required'],
            'histoire' => ['required'],
            'superieur' => ['required']
        ]);

        if($validator->fails()) {
            return redirect()->route('formulaires.accident', ['username'=>Session::get('username')])->withErrors($validator)->withInput();
        } else {
            return redirect()->route('dashboard', ['username'=>Session::get('username')]);
        }

    }
}
