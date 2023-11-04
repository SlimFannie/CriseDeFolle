<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('connexion');
})->name('connexion');

Route::POST('/connexion',
[UsagersController::class, 'login'])->name('usagers.login');

Route::POST('/déconnexion',
[UsagersController::class, 'logout'])->name('usagers.logout');
