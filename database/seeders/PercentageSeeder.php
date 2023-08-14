<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PercentageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //INGRESANDO DATOS
        DB::table('percentages')->delete();

        DB::table('percentages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'value_percentage' => 13.5,
                'comments' => "Porcentaje para producto 1",
            ),
            1 =>
            array (
                'id' => 2,
                'value_percentage' => 14,
                'comments' => "Porcentaje para producto 2",
            ),
            2 =>
            array (
                'id' => 3,
                'value_percentage' => 27,
                'comments' => "Porcentaje para producto 3",
            ),
            3 =>
            array (
                'id' => 4,
                'value_percentage' => 32,
                'comments' => "Porcentaje para producto 4",
            ),


        ));
    }
}
