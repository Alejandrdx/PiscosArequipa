<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('password');
            $table->string('Nombres');
            $table->string('Apellido_Paterno');
            $table->string('Apellido_Materno');
            $table->string('DNI')->unique();
            $table->string('Direccion');
            $table->string('Telefono')->unique();
            $table->string('Email')->unique();
            $table->unsignedBigInteger('Id_Rol');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('Id_Rol')->references('id')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
