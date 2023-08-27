<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsTableSeeder extends Seeder
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
        DB::table('cards')->delete();

        DB::table('cards')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Tarjeta de Crédito',
            ),
            1 =>
            array (
               'id' => 2,
               'name' => 'Tarjeta de Débito',
            ),
            2 =>
            array (
               'id' => 3,
               'name' => 'Tarjeta de Virtual',
            ),
            3 =>
            array (
               'id' => 4,
               'name' => 'Tarjeta Prepago',
            ),

        ));
    }
}
