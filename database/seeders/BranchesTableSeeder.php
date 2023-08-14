<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesTableSeeder extends Seeder
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
         DB::table('branches')->delete();

         DB::table('branches')->insert(array (
             0 =>
             array (
                 'id' => 1,
                 'name' => 'ANATOLIT_1 SAS',
                 'nit' => '12354',
                 'address' => 'CALLE 132 # 32',
                 'email' => 'anatolit_1@gerencia.com',
                 'phone' => '43657753',
                 'contact' => 'faceboo',
                 'company_id' => '2',
                 'municipality_id' => '24',

             ),
             1 =>
             array (
                'id' => 2,
                'name' => 'SILVIA_1 SAS',
                'nit' => '747354',
                'address' => 'CALLE 132 # 32',
                'email' => 'silvia_1@gerencia.com',
                'phone' => '43657753',
                'contact' => 'faceboo',
                'company_id' => '1',
                'municipality_id' => '26',

             ),
             2 =>
             array (
                'id' => 3,
                'name' => 'MARIANA_1 SAS',
                'nit' => '88854',
                'address' => 'CALLE 132 # 32',
                'email' => 'mariana_1@gerencia.com',
                'phone' => '43657753',
                'contact' => 'faceboo',
                'company_id' => '3',
                'municipality_id' => '18',

             ),
             3 =>
             array (
                'id' => 4,
                'name' => 'KARLA_1 SAS',
                'nit' => '199549',
                'address' => 'CALLE 132 # 32',
                'email' => 'karla_1@gerencia.com',
                'phone' => '43657753',
                'contact' => 'faceboo',
                'company_id' => '4',
                'municipality_id' => '20',

             ),

         ));
     }

}
