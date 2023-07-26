<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //INGRESANDO DATOS
         DB::table('companies')->delete();

         DB::table('companies')->insert(array (
             0 =>
             array (
                 'id' => 1,
                 'name' => 'ANATOLIT SAS',
                 'nit' => '12354',
                 'dv' => '5',
                 'address' => 'CALLE 132 # 32',
                 'email' => 'anatolit@gerencia.com',
                 'phone' => '43657753',
                 'contact' => 'faceboo.com/anatolit-distribuiviones',
                 'municipality_id' => '24',

             ),
             1 =>
             array (
                'id' => 2,
                'name' => 'SILVIA SAS',
                'nit' => '747354',
                'dv' => '5',
                'address' => 'CALLE 132 # 32',
                'email' => 'silvia@gerencia.com',
                'phone' => '43657753',
                'contact' => 'faceboo.com/silvia-distribuiviones',
                'municipality_id' => '26',
             ),
             2 =>
             array (
                'id' => 3,
                'name' => 'MARIANA SAS',
                'nit' => '88854',
                'dv' => '5',
                'address' => 'CALLE 132 # 32',
                'email' => 'mariana@gerencia.com',
                'phone' => '43657753',
                'contact' => 'faceboo.com/mariana-distribuiviones',
                'municipality_id' => '18',
             ),
             3 =>
             array (
                'id' => 4,
                'name' => 'KARLA SAS',
                'nit' => '199549',
                'dv' => '5',
                'address' => 'CALLE 132 # 32',
                'email' => 'karla@gerencia.com',
                'phone' => '43657753',
                'contact' => 'faceboo.com/karla-distribuiviones',
                'municipality_id' => '20',
             ),

         ));
     }

}
