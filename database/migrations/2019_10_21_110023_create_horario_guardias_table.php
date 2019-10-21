<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioGuardiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_guardias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('guardia_id');
            $table->foreign('guardia_id')->references('id')->on('guardias');
            $table->unsignedBigInteger('fraccionamiento_id');
            $table->foreign('fraccionamiento_id')->references('id')->on('fraccionamientos');
            $table->time('hora_inicio');
            $table->time('hora_fin');
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
        Schema::dropIfExists('horario_guardias');
    }
}
