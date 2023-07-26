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
                'password' => bcrypt('1234QWERas')
            )

        ));
    }
}
