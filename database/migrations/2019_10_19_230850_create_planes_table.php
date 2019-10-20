<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->integer('numero_not_semanales');
            $table->boolean('visualizar_perfilGuardia');
            $table->boolean('visualizar_cambioTurno');
            $table->boolean('visualizacion_estadisticas');
            $table->boolean('boton_notificador_emergencias');
            $table->boolean('visualizador_visitas');
            $table->boolean('valoracion_desempeio_guardias');
            $table->integer('numero_usuario_x_plan');
            $table->boolean('notficacion_rondin');
            $table->integer('numero_vizualizaciones_rondin');
            $table->integer('numero_codigo_qr');
            $table->boolean('estado');
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
        Schema::dropIfExists('planes');
    }
}
