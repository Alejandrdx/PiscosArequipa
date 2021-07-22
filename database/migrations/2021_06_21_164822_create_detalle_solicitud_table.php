<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_solicitud', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Cantidad');
            $table->unsignedBigInteger('Id_Solicitud');
            $table->unsignedBigInteger('Id_Pisco');
            $table->timestamps();

            $table->foreign('Id_Solicitud')->references('id')->on('solicitud');
            $table->foreign('Id_Pisco')->references('id')->on('pisco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_solicitud');
    }
}
