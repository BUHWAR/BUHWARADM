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
            $table->string('nombre')->nullable($value = true);
            $table->integer('numero_not_semanales')->nullable($value = true);
            $table->boolean('visualizar_perfilGuardia')->nullable($value = true);
            $table->boolean('visualizar_cambioTurno')->nullable($value = true);
            $table->boolean('visualizacion_estadisticas')->nullable($value = true);
            $table->boolean('boton_notificador_emergencias')->nullable($value = true);
            $table->boolean('visualizador_visitas')->nullable($value = true);
            $table->boolean('valoracion_desempeio_guardias')->nullable($value = true);
            $table->integer('numero_usuario_x_plan')->nullable($value = true);
            $table->boolean('notficacion_rondin')->nullable($value = true);
            $table->integer('numero_vizualizaciones_rondin')->nullable($value = true);
            $table->integer('numero_codigo_qr')->nullable($value = true);
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
