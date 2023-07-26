<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UseersTableSeeder extends Seeder
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
         DB::table('useers')->delete();

         DB::table('useers')->insert(array (
             0 =>
             array (
                 'id' => 1,
                 'name' => 'Esteban',
                 'email' => 'naunestebancastillo@gmail.com',
                 'user_role' => 'Admin',
                 'address' => 'CALLE 132 # 32',
                 'status' => 'active',

             ),
             1 =>
             array (
                'id' => 2,
                 'name' => 'Silvia',
                 'email' => 'Silviacelis@gmail.com',
                 'user_role' => 'Jefe',
                 'address' => 'CALLE 132 # 32',
                 'status' => 'active',
             ),
             2 =>
             array (
                'id' => 3,
                 'name' => 'Andrea',
                 'email' => 'Andreacaceres@gmail.com',
                 'user_role' => 'enfermera',
                 'address' => 'CALLE 132 # 32',
                 'status' => 'active',
             ),
             3 =>
             array (
                'id' => 4,
                 'name' => 'Jhon',
                 'email' => 'Jhon@gmail.com',
                 'user_role' => 'Ingeniero',
                 'address' => 'CALLE 132 # 32',
                 'status' => 'active',
             ),

         ));
    }
}
