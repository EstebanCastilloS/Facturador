<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGRESANDO DATOS
        DB::table('payment_methods')->delete();

        DB::table('payment_methods')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Dinero',
                'code' => '0001',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Tarjeta',
                'code' => '0002',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Cheque',
                'code' => '0003',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Transferencia Bancaria',
                'code' => '0004',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Domiciliaciones de Pago',
                'code' => '0005',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Lectura de Cambio',
                'code' => '0006',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Contra Reembolso',
                'code' => '0007',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Virtual',
                'code' => '0008',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Desde el Teléfono',
                'code' => '0009',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'NFC',
                'code' => '0010',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Reconocimiento Facial',
                'code' => '0011',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Código QR',
                'code' => '0012',
            ),


        ));
    }
}
