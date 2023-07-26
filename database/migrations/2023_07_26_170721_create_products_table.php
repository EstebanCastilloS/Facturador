<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name',45)->unique();
            $table->decimal('price_purchase',10,2);
            $table->decimal('price_invoice',10,2);
            $table->decimal('stock',10,2);
            $table->enum('status',['active','inactive'])->default('active');

            //
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');


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
        Schema::dropIfExists('products');
    }
}
