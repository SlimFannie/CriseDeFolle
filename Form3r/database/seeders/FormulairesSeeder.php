<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FormulairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                DB::table('formulaires')->insert([
                    // Accident de travail
                    [   
                        'titre'=>'Déclaration d\'accident de travail',
                        'superieur'=>false,
                        'question1'=>'Nom de l\'employé', 
                        'question2'=>'Fonction au moment de l\'évènement', 
                        'question3'=>'Matricule', 
                        'question4'=>'Date de l\'accident', 
                        'question5'=>'Heure', 
                        'question6'=>'Témoin(s)', 
                        'question7'=>'Nom', 
                        'question8'=>'Nom', 
                        'question9'=>'Endroit de l\'accident', 
                        'question10'=>'Secteur d\'activité',
                        'question11'=>'Nature et site de la blessure (cochez, s\'il y a lieu, côté droit ou gauche)', 
                        'question12'=>'Description de la blessure (à cocher)', 
                        'question13'=>'Violence (à cocher)', 
                        'question14'=>'Décrivez la tâche effectué et comment s\'est produit la blessure', 
                        'question15'=>'Premiers soins', 
                        'question16'=>'Nom du secouriste', 
                        'question17'=>'Accident de nécessitant aucune absence.', 
                        'question18'=>'Accident nécessitant une consultation médicale', 
                        'question19'=>'Je confirme que les informations ci-dessus sont exactes.',
                        'question20'=>null,
                        'question21'=>null,
                        'question22'=>null,
                        'question23'=>null,
                        'question24'=>null,
                        'question25'=>null,
                    ],
                    // Situation dangereuse
                    [
                        'titre'=>'Signalement d\'une situation dangereuse, d\'un acte de violence ou d\'un « passé proche »',
                        'superieur'=>false,
                        'question1'=>'Nom', 
                        'question2'=>'Prénom', 
                        'question3'=>'Matricule', 
                        'question4'=>'Fonction au moment de l\'événement',
                        'question5'=>'Secteur d\'activité',
                        'question6'=>'Date de l\'observation',
                        'question7'=>'Heure',
                        'question8'=>'Lieu',
                        'question9'=>'Témoin(s)',
                        'question10'=>'Description de la situation dangereuse ou du « passé proche »',
                        'question11'=>'Correction(s) ou amélioration(s) proposée(s)',
                        'question12'=>null,
                        'question13'=>null,
                        'question14'=>null,
                        'question15'=>null,
                        'question16'=>null,
                        'question17'=>null,
                        'question18'=>null,
                        'question19'=>null,
                        'question20'=>null,
                        'question21'=>null,
                        'question22'=>null,
                        'question23'=>null,
                        'question24'=>null,
                        'question25'=>null,
                    ],
                    // Grille audit - formulaire simplifié
                    [
                        'titre'=>'Grille audit SST - Formulaire simplifié',
                        'superieur'=>true,
                        'question1'=>'Nom de l\'employé',
                        'question2'=>'Lieu(x) des travaux',
                        'question3'=>'Date',
                        'question4'=>'Heure',
                        'question5'=>'EPI',
                        'question6'=>'Tenue des lieux',
                        'question7'=>'Comportement sécuritaire',
                        'question8'=>'Signalisation',
                        'question9'=>'Fiches signalétiques',
                        'question10'=>'Travaux - Excavation',
                        'question11'=>'Espace clos',
                        'question12'=>'Méthode de travail',
                        'question13'=>'Autre(s)',
                        'question14'=>'Respect de la distanciation',
                        'question15'=>'Port des EPI (masque/visière)',
                        'question16'=>'Respect des procédures établies',
                        'question17'=>'Description',
                        'question18'=>null,
                        'question19'=>null,
                        'question20'=>null,
                        'question21'=>null,
                        'question22'=>null,
                        'question23'=>null,
                        'question24'=>null,
                        'question25'=>null,
                    ],
                    // Atelier mécanique - Rapport d'accident
                    [
                        'titre'=>'Atelier mécanique - Rapport d\'accident',
                        'superieur'=>true,
                        'question1'=>'Numéro(s) d\'unité(s) impliqué(s)',
                        'question2'=>'Département',
                        'question3'=>'Prénom et nom de l\'employé impliqué',
                        'question4'=>'Prénom et nom du supérieur immédiat',
                        'question5'=>'Numéro du permis de conduire de l\'employé',
                        'question6'=>'Autre véhicules impliqués (citoyens)',
                        'question7'=>null,
                        'question8'=>null,
                        'question9'=>null,
                        'question10'=>null,
                        'question11'=>null,
                        'question12'=>null,
                        'question13'=>null,
                        'question14'=>null,
                        'question15'=>null,
                        'question16'=>null,
                        'question17'=>null,
                        'question18'=>null,
                        'question19'=>null,
                        'question20'=>null,
                        'question21'=>null,
                        'question22'=>null,
                        'question23'=>null,
                        'question24'=>null,
                        'question25'=>null,
                    ],
                ]);
            }
        }
