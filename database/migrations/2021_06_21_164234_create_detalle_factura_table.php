<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Cantidad');
            $table->unsignedBigInteger('Id_Factura');
            $table->unsignedBigInteger('Id_Pisco');
            $table->timestamps();

            $table->foreign('Id_Factura')->references('id')->on('factura');
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
        Schema::dropIfExists('detalle_factura');
    }
}
