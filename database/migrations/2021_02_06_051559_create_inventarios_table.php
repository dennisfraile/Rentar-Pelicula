<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->integer('pelicula_id')->unsigned();
            //$table->integer('transaccion_id')->unsigned();
            $table->boolean('estado');
            $table->timestamps();

            //Relation
            $table->foreign('pelicula_id')->references('id')->on('peliculas')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign('transaccion_id')->references('id')->on('Transacciones')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}
