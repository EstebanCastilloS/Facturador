<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentificationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGRESANDO DATOS
        DB::table('identification_types')->delete();

        DB::table('identification_types')->insert(array
        (
            0 =>
            array (
                'id' => 1,
                'name' => 'Administrador',
                'code' => '111111',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Contador',
                'code' => '222222',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Gerencia',
                'code' => '333333',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Auxiliar',
                'code' => '444444',
            ),
        ));
    }
}
