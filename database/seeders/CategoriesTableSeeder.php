<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGRESANDO DATOS
        DB::table('categories')->delete();

        DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Categoría_1',
                'description' => 'Descrición_Categoría_1',
                'iva' => '21.0',
                'utility' => '11',

            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Categoría_2',
                'description' => 'Descrición_Categoría_2',
                'iva' => '3.10',
                'utility' => '22',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Categoría_3',
                'description' => 'Descrición_Categoría_3',
                'iva' => '3.10',
                'utility' => '31',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Categoría_4',
                'description' => 'Descrición_Categoría_4',
                'iva' => '4.14',
                'utility' => '4',
            ),

        ));
    }
}
