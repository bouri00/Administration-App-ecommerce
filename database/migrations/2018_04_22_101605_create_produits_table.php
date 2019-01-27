<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->string('titre');
            $table->integer('quantite');
            $table->string('imagePath');
            $table->double('prix');
            $table->integer('id_cat')->unsigned();
            $table->foreign('id_cat')->references('id')->on('categoriers');
             $table->integer('libelle')->unsigned();
            $table->foreign('libelle')->references('id')->on('categoriers');
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
        Schema::dropIfExists('produits');
    }
}
