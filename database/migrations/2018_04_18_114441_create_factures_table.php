<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('idprod')->unsigned();
            $table->foreign('idprod')->references('id')->on('produits');
            $table->integer('idpclient')->unsigned();
            $table->foreign('idpclient')->references('id')->on('clients');
            $table->integer('idpcom')->unsigned();
            $table->foreign('idpcom')->references('id')->on('commandes');
            $table->date('datelivraison');

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
        Schema::dropIfExists('factures');
    }
}
