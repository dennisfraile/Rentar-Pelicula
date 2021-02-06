<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas_categorias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('cat_id')->unsigned();
            $table->integer('pel_id')->unsigned();

            //Relation
            $table->foreign('cat_id')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pel_id')->references('id')->on('peliculas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas_categorias');
    }
}
