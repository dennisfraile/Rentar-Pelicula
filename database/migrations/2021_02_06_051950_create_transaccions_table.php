<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaccions', function (Blueprint $table) {
            $table->id();
            $table->double('monto');
            $table->bigInteger('tipo_id')->unsigned();
            $table->bigInteger('inventario_id')->unsigned();
            $table->date('fechaSalida');
            $table->date('fechaEntrada');
            $table->timestamps();

            $table->foreign('tipo_id')->references('id')->on('tipo_transaccions');
            $table->foreign('inventario_id')->references('id')->on('inventarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaccions');
    }
}
