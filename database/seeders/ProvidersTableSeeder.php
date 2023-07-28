<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGRESANDO DATOS
        DB::table('providers')->delete();

        DB::table('providers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'identification' => '111111111111',
                'name' => 'Esteban Castillo',
                'address' => 'calle 149 # 11-75',
                'email' => 'estebancastillo@gmail.com',
                'phone' => '123455432',
                'status' => 'active',
                'company_id' => 1,
                'municipality_id' => 1,
                'identification_type_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'identification' => '222222222222',
                'name' => 'Silvia celis',
                'address' => 'calle 166 # 11-75',
                'email' => 'silviaceliso@gmail.com',
                'phone' => '123455432',
                'status' => 'active',
                'company_id' => 2,
                'municipality_id' => 2,
                'identification_type_id' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'identification' => '333333333333',
                'name' => 'Andrea Carrillo',
                'address' => 'calle 229 # 11-75',
                'email' => 'andreacarrillo@gmail.com',
                'phone' => '123455432',
                'status' => 'active',
                'company_id' => 3,
                'municipality_id' => 3,
                'identification_type_id' => 3,
            ),
            3 =>
            array (
                'id' => 4,
                'identification' => '444444444444',
                'name' => 'Karina Avila',
                'address' => 'calle 59 # 19-09',
                'email' => 'karinaavila@gmail.com',
                'phone' => '123455432',
                'status' => 'inactive',
                'company_id' => 4,
                'municipality_id' => 4,
                'identification_type_id' => 4,
            ),

        ));
    }
}
