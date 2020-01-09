<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('code_banq')->length(5)->unsigned();
            $table->integer('code_bguichet')->length(5)->unsigned();
            $table->bigInteger('rib')->unsigned();
            $table->integer('cle_rib')->unsigned();
            $table->double('solde');
            $table->enum('devise', ['TND', 'EUR','USD']);
            $table->unsignedBigInteger('titulaire');
            $table->foreign('titulaire')->references('id')->on('clients');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
