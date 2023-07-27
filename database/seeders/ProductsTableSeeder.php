<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGRESANDO DATOS
        DB::table('products')->delete();

        DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Producto_Categoría_1',
                'price_purchase' => 1000000,
                'price_invoice' => 2000000,
                'stock' => 0,
                'status' => 'active',
                'category_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Producto_Categoría_2',
                'price_purchase' => 2000000,
                'price_invoice' => 3000000,
                'stock' => 0,
                'status' => 'active',
                'category_id' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Producto_Categoría_3',
                'price_purchase' => 3000000,
                'price_invoice' => 4000000,
                'stock' => 0,
                'status' => 'active',
                'category_id' => 3,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Producto_Categoría_4',
                'price_purchase' => 4000000,
                'price_invoice' => 5000000,
                'stock' => 0,
                'status' => 'active',
                'category_id' => 4,
            ),


        ));
    }
}
