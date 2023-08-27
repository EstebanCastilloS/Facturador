<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PymentFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGRESANDO DATOS
        DB::table('pyment_forms')->delete();

        DB::table('pyment_forms')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Forma de Pago 1',
                'code' => '0001',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Forma de Pago 2',
                'code' => '0002',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Forma de Pago 3',
                'code' => '0003',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Forma de Pago 4',
                'code' => '0004',
            ),

        ));
    }
}
