<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Fecha_Solicitud");
            $table->text('Descripcion')->nullable();
            $table->unsignedBigInteger('Id_Empleado');
            $table->unsignedBigInteger('Id_Sede');
            $table->unsignedBigInteger('Id_Estado');
            $table->timestamps();

            $table->foreign('Id_Empleado')->references('id')->on('users');
            $table->foreign('Id_Sede')->references('id')->on('sede');
            $table->foreign('Id_Estado')->references('id')->on('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud');
    }
}
