<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //INGRESANDO DATOS
         DB::table('banks')->delete();

         DB::table('banks')->insert(array (
             0 =>
             array (
                 'id' => 1,
                 'name' => 'Aportes en Línea',
             ),
             1 =>
             array (
                'id' => 2,
                'name' => 'Asopagos',
             ),
             2 =>
             array (
                'id' => 3,
                'name' => 'Banco Agrario de Colombia',
             ),
             3 =>
             array (
                'id' => 4,
                'name' => 'Banco AV Villas',
             ),
             4 =>
             array (
                 'id' => 5,
                 'name' => 'Banco BBVA',
             ),
             5 =>
             array (
                'id' => 6,
                'name' => 'Banco BCSC',
             ),
             6 =>
             array (
                'id' => 7,
                'name' => 'Banco Citibank',
             ),
             7 =>
             array (
                'id' => 8,
                'name' => 'Banco Coopcentral',
             ),
             8 =>
             array (
                 'id' => 9,
                 'name' => 'Banco Davivienda',
             ),
             9 =>
             array (
                'id' => 10,
                'name' => 'Banco de Bogotá',
             ),
             10 =>
             array (
                'id' => 11,
                'name' => 'Banco de la República',
             ),
             11 =>
             array (
                'id' => 12,
                'name' => 'Banco de Occidente',
             ),
             12 =>
             array (
                 'id' => 13,
                 'name' => 'Banco Falabella',
             ),
             13 =>
             array (
                'id' => 14,
                'name' => 'Banco Finandina',
             ),
             14 =>
             array (
                'id' => 15,
                'name' => 'Banco GNB Sudameris',
             ),
             15 =>
             array (
                'id' => 16,
                'name' => 'Banco Itaú Corpbanca Colombia S.A.',
             ),
             16 =>
             array (
                 'id' => 17,
                 'name' => 'Banco Mundo Mujer',
             ),
             17 =>
             array (
                'id' => 18,
                'name' => 'Banco Pichincha',
             ),
             18 =>
             array (
                'id' => 19,
                'name' => 'Banco Popular',
             ),
             19 =>
             array (
                'id' => 20,
                'name' => 'Banco Credifinanciera',
             ),
             20 =>
             array (
                 'id' => 21,
                 'name' => 'Banco Santander de Negocios Colombia S.A.',
             ),
             21 =>
             array (
                'id' => 22,
                'name' => 'Bancamia S.A',
             ),
             22 =>
             array (
                'id' => 23,
                'name' => 'Banco Serfinanza',
             ),
             23 =>
             array (
                'id' => 24,
                'name' => 'Bancoldex',
             ),
             24 =>
             array (
                 'id' => 25,
                 'name' => 'Bancolombia ',
             ),
             25 =>
             array (
                'id' => 26,
                'name' => 'Bancoomeva ',
             ),
             26 =>
             array (
                'id' => 27,
                'name' => 'BNP Paribas',
             ),
             27 =>
             array (
                'id' => 28,
                'name' => 'Banco AV Villas',
             ),

         ));
    }
}
