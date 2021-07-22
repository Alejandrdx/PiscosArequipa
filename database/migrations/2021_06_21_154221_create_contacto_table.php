<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres');
            $table->string('Apellido_Paterno');
            $table->string('Apellido_Materno');
            $table->string('DNI')->unique();
            $table->string('Telefono')->unique();
            $table->string('Email')->unique();
            $table->unsignedBigInteger('Id_Cliente');
            $table->timestamps();

            $table->foreign('Id_Cliente')->references('id')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto');
    }
}
