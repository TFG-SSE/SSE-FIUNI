<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EncuestaDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta_detalle', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta');
            $table->enum('tipo_pregunta', ['pregunta', 'seleccion_multiple', 'seleccion_multiple_justificacion', 'seleccion', 'seleccion_justificacion', 'desplegable', 'orden']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuesta_detalle');
    }
}
