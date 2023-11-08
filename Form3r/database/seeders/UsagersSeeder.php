<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsagersSeeder extends Seeder
{

    

    /**
     * Run the database seeds.
     * 
        *   $table->Integer('matricule');
        *   $table->string('nom');
        *   $table->string('prenom');
        *   $table->string('image')->nullable();
            *$table->string('courriel');
            *$table->string('mdp');
            *$table->string('departement_id')->nullable();
            *$table->boolean('admin')->default(false);
            *$table->Integer('matriculeSuperieur')->nullable();
     */
    public function run(): void
    {

        DB::table('usagers')->insert([
            [
            'matricule' => 1000001,
            'nom' => 'Pépin',
            'prenom' => 'Marc',
            'courriel' => 'pepin.marc@v3r.com',
            'mdp' => 'password',
            'departement_id' => 2,
            'matriculeSuperieur' => 1000004, 
            'superieur' => false,
            'admin' => false,
        ],
        [
            'matricule' => 1000002,
            'nom' => 'Reid',
            'prenom' => 'Claudine',
            'courriel' => 'reid.claudine@v3r.com',
            'mdp' => 'password',
            'departement_id' => 2,
            'matriculeSuperieur' => 1000004, 
            'superieur' => false,
            'admin' => false,
        ],
        [
            'matricule' => 1000003,
            'nom' => 'Temps',
            'prenom' => 'Paul',
            'courriel' => 'temps.paul@v3r.com',
            'mdp' => 'password',
            'departement_id' => 2,
            'matriculeSuperieur' => 1000004, 
            'superieur' => false,
            'admin' => false,
        ],
        [
            'matricule' => 1000004,
            'nom' => 'Dow',
            'prenom' => 'Jane',
            'courriel' => 'dow.jane@v3r.com',
            'mdp' => 'password',
            'departement_id' => 2,
            'matriculeSuperieur' => 1000005, 
            'superieur' => true,
            'admin' => false,
        ],
        [
            'matricule' => 1000005,
            'nom' => 'Morinville',
            'prenom' => 'Jonathan',
            'courriel' => 'morinville.jonathan@v3r.com',
            'mdp' => 'password',
            'departement_id' => 1,
            'matriculeSuperieur' => 1000006, 
            'superieur' => true,
            'admin' => true,
        ],
        [
            'matricule' => 1000006,
            'nom' => 'Lizotte',
            'prenom' => 'Alain',
            'courriel' => 'lizotte.alain@v3r.com',
            'mdp' => 'password',
            'departement_id' => 1,
            'matriculeSuperieur' => null, 
            'superieur' => true,
            'admin' => false,
        ],
        [
            'matricule' => 1000007,
            'nom' => 'Levesque',
            'prenom' => 'Michèle',
            'courriel' => 'levesque.michele@v3r.com',
            'mdp' => 'password',
            'departement_id' => 6,
            'matriculeSuperieur' => 1000008, 
            'superieur' => false,
            'admin' => false,
        ],
        [
            'matricule' => 1000008,
            'nom' => 'St-Laurent',
            'prenom' => 'Josée',
            'courriel' => 'stlaurent.josee@v3r.com',
            'mdp' => 'password',
            'departement_id' => 6,
            'matriculeSuperieur' => 1000009, 
            'superieur' => true,
            'admin' => true,
        ],
        [
            'matricule' => 1000009,
            'nom' => 'Belisle',
            'prenom' => 'Claude',
            'courriel' => 'belisle.claude@v3r.com',
            'mdp' => 'password',
            'departement_id' => 6,
            'matriculeSuperieur' => null, 
            'superieur' => true,
            'admin' => false,
        ],
    ]);
        
    }
}