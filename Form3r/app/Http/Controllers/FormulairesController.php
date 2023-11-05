<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usager;
use Session;

class FormulairesController extends Controller
{
    
    // Accident de travail

    public function accident() {
        $superieurs = Usager::where('superieur', true)->get();
        return view('formulaires.accident', ['username'=>Session::get('username'), 'superieurs'=>$superieurs]);
    }

}
