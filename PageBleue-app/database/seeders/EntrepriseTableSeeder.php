<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entreprise;

class EntrepriseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        entreprise::create([
            'nom_ent'=>'Apple',
            'rue_ent'=>'Avignon',
            'code_postal_ent'=>'971',
            'ville_ent'=>'Floride',
            'numero_telephone_ent'=>'0678985423',
            'email_ent'=>'stevejobs@gmail.com',
            
        ]);

        entreprise::create([
            'nom_ent'=>'Microsoft',
            'rue_ent'=>'Stalingrad',
            'code_postal_ent'=>'75012',
            'ville_ent'=>'Los Angeles',
            'numero_telephone_ent'=>'0699887766',
            'email_ent'=>'billgates@gmail.com',
            
        ]);

        entreprise::create([
            'nom_ent'=>'Asus',
            'rue_ent'=>'Matignon',
            'code_postal_ent'=>'93113',
            'ville_ent'=>'Paris',
            'numero_telephone_ent'=>'0611223344',
            'email_ent'=>'asus@gmail.com',
        ]);

            entreprise::create([
                'nom_ent'=>'DGSI',
                'rue_ent'=>'Champs-Elysee',
                'code_postal_ent'=>'75001',
                'ville_ent'=>'Paris',
                'numero_telephone_ent'=>'0293847561',
                'email_ent'=>'dgsi@gmail.com',
            
        ]);
    }
}
