<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGRESANDO DATOS
        DB::table('customers')->delete();

        DB::table('customers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Jhon García',
                'email' => 'jhongarcia@gmail.com',
                'phone' => '123455432',
                'status' => 'active',
                'company_id' => 1,
                'municipality_id' => 1,
                'identification_type_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Johana villamizar',
                'email' => 'johanavillamizar@gmail.com',
                'phone' => '123455432',
                'status' => 'active',
                'company_id' => 2,
                'municipality_id' => 2,
                'identification_type_id' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'juliana castro',
                'email' => 'julianacastro@gmail.com',
                'phone' => '123455432',
                'status' => 'active',
                'company_id' => 3,
                'municipality_id' => 3,
                'identification_type_id' => 3,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Emilia Alcón',
                'email' => 'emiliaalcon@gmail.com',
                'phone' => '123455432',
                'status' => 'inactive',
                'company_id' => 4,
                'municipality_id' => 4,
                'identification_type_id' => 4,
            ),

        ));
    }
}
