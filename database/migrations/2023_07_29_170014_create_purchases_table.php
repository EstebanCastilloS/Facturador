<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();

            $table->date('generation_date');
            $table->date('due_date');
            $table->decimal('subtotal',10,2);
            $table->decimal('iva',10,2);
            $table->decimal('total',12,2);
            $table->decimal('pay',12,2);
            $table->decimal('balance',12,2);
            $table->decimal('retention',10,2);
            $table->enum('status',['active','inactive'])->default('active');

            //llave
            $table->foreignId('provider_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('branche_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('percentage_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');


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
        Schema::dropIfExists('purchases');
    }
}
