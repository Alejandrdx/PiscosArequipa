<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Fecha");
            $table->string('N_GuiaRemision')->unique();
            $table->float('Total');
            $table->unsignedBigInteger('Id_Cliente');
            $table->unsignedBigInteger('Id_Empleado');
            $table->unsignedBigInteger('Id_NotaPedido');
            $table->timestamps();

            $table->foreign('Id_Cliente')->references('id')->on('cliente');
            $table->foreign('Id_Empleado')->references('id')->on('users');
            $table->foreign('Id_NotaPedido')->references('id')->on('nota_pedido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
