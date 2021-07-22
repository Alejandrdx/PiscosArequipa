<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_pedido', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Fecha_Pedido");
            $table->dateTime("Fecha_Entrega")->nullable();
            $table->dateTime("Fecha_Pago")->nullable();
            $table->text('Descripcion')->nullable();
            $table->unsignedBigInteger('Id_Contacto');
            $table->unsignedBigInteger('Id_TipoReunion');
            $table->unsignedBigInteger('Id_Sede');
            $table->unsignedBigInteger('Id_Empleado');
            $table->timestamps();

            $table->foreign('Id_Contacto')->references('id')->on('contacto');
            $table->foreign('Id_TipoReunion')->references('id')->on('tipo_reunion');
            $table->foreign('Id_Sede')->references('id')->on('sede');
            $table->foreign('Id_Empleado')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_pedido');
    }
}
