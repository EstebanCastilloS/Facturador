<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentmethodPaypurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentmethod_paypurchases', function (Blueprint $table) {
            $table->id();

            $table->decimal('pay',12,2);
            $table->string('transaction');

            //laves
            $table->foreignId('pay_purchase_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('payment_method_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('card_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bank_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            //debe ir al purchase
            $table->foreignId('pyment_form_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('paymentmethod_paypurchases');
    }
}
