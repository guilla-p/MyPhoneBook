<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\collaborateur;
use App\Http\Controllers\Controller;

class CollaborateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collaborateur::create([
            'civilite'=>'Homme',
            'nom_collab'=>'Astru',
            'prenom_collab'=>'Paul',
            'rue_collab'=>'Champs Elysées',
            'code_postal_collab'=>'75014',
            'ville_collab'=>'Marseille',
            'numero_telephone_collab'=>'0678722666',
            'email_collab'=>'paulastru@gmail.com',
            'entreprise_collab'=>'Microsoft',
        ]);

        collaborateur::create([
            'civilite'=>'Femme',
            'nom_collab'=>'Dupont',
            'prenom_collab'=>'Rosalie',
            'rue_collab'=>'Jean Jaures',
            'code_postal_collab'=>'75014',
            'ville_collab'=>'Paris',
            'numero_telephone_collab'=>'0678788093',
            'email_collab'=>'rosalie@gmail.com',
            'entreprise_collab'=>'Asus',
        ]);

        collaborateur::create([
            'civilite'=>'Homme',
            'nom_collab'=>'Durul',
            'prenom_collab'=>'Ahmet',
            'rue_collab'=>'Voltaire',
            'code_postal_collab'=>'75012',
            'ville_collab'=>'Paris',
            'numero_telephone_collab'=>'0678998854',
            'email_collab'=>'durulahmet@gmail.com',
            'entreprise_collab'=>'Apple',
        ]);        

        collaborateur::create([
            'civilite'=>'Homme',
            'nom_collab'=>'GUILLAULE',
            'prenom_collab'=>'Pierre',
            'rue_collab'=>'DeGaulle',
            'code_postal_collab'=>'92170',
            'ville_collab'=>'Numea',
            'numero_telephone_collab'=>'0974839203',
            'email_collab'=>'guilpierre@gmail.com',
            'entreprise_collab'=>'DGSI',
        ]); 
        
    }
}
