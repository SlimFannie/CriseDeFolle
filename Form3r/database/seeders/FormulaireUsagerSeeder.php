<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FormulaireUsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formulaire_usager')->insert([
            [
                'usager_id'=>'1',
                'formulaire_id'=>'1',
                'reponse1'=>'test',
                'reponse2'=>'test',
                'reponse3'=>'rat',
            ],
            [
                'usager_id'=>'1',
                'formulaire_id'=>'3',
                'reponse1'=>'test',
                'reponse2'=>'test',
                'reponse3'=>'gros rat',
            ],
            [
                'usager_id'=>'2',
                'formulaire_id'=>'1',
                'reponse1'=>'rat',
                'reponse2'=>'rat',
                'reponse3'=>'rat',
            ],
        ]);
    }
}
