<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\FormulairesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Connexion */

Route::get('/', function () {
    return view('connexion');
})->name('connexion');

Route::POST('/connexion',
[UsagersController::class, 'login'])->name('usagers.login');

Route::get('/déconnexion',
[UsagersController::class, 'logout'])->name('usagers.logout');

Route::get('/{username}',
[UsagersController::class, 'index'])->name('dashboard');

/* Accident de travail */

Route::get('/{username}/AccidentDeTravail',
[FormulairesController::class, 'accident'])->name('formulaires.accident');
