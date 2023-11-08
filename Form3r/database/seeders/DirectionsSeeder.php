<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DirectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directions')->insert([
            ['nom'=>'Gauche'],
            ['nom'=>'Droite'],
            ['nom'=>'Haut'],
            ['nom'=>'Bas'],
        ]);
    }
}
