<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->string('name',45);
            $table->string('email',45);
            $table->string('phone',45);
            $table->enum('status',['active','inactive'])->default('active');

            //lave forane
            $table->foreignId('municipality_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('company_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('identification_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('customers');
    }
}
