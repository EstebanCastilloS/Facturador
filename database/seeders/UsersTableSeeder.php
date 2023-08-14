<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //AGREGAR LOS DATOS
        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Esteban',
                'email' => 'naunestebancastillo@gmail.com',
                'address' => 'Calle 23 # 32-12',
                'password' => bcrypt('1234QWERas'),
                'user_role' => 'Administrador',
                'status'=>'active',
                'branche_id' => 1,


            ),
            1 =>
             array (
                'id' => 2,
                 'name' => 'Silvia',
                 'email' => 'Silviacelis@gmail.com',
                 'address' => 'Calle 23 # 32-12',
                'password' => bcrypt('1234QWERas'),
                'user_role' => 'Recursos Humanos',
                'status'=>'active',
                'branche_id' => 1,

             ),
             2 =>
             array (
                'id' => 3,
                 'name' => 'Andrea',
                 'email' => 'Andreacaceres@gmail.com',
                 'address' => 'Calle 23 # 32-12',
                'password' => bcrypt('1234QWERas'),
                'user_role' => 'Secretaria',
                'status'=>'active',
                'branche_id' => 1,

             ),
             3 =>
             array (
                'id' => 4,
                 'name' => 'Jhon',
                 'email' => 'Jhon@gmail.com',
                 'address' => 'Calle 23 # 32-12',
                'password' => bcrypt('1234QWERas'),
                'user_role' => 'Ingeniero',
                'status'=>'active',
                'branche_id' => 1,

             ),

        ));
    }
}
