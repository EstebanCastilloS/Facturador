<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_purchases', function (Blueprint $table) {
            $table->id();
            $table->decimal('quantity',10,2);
            $table->decimal('price',10,2);
            $table->decimal('totalIva',10,2);
            $table->decimal('Subtotal',10,2);
            $table->decimal('porcentajeIva',10,2);

            //lave
            $table->foreignId('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('purchase_id')->constrained()->onUpdate('cascade')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_purchases');
    }
}
