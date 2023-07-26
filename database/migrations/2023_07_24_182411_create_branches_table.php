<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();

            $table->string('name',45)->unique();
            $table->string('nit',20)->unique();
            $table->string('address',100);
            $table->string('email',45);
            $table->string('phone',10);
            $table->string('contact',45);


            //llave foranea company
            $table->foreignId('company_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            //lave foranea municipality
            $table->foreignId('municipality_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            //AGREGADO
            //llave foranea useer
            // $table->foreignId('useer_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('branches');
    }
}
