<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',200)->nullable($value = true);
            $table->string('direccion',230)->nullable($value = true);
            $table->string('telefono',20)->nullable($value = true);
            $table->string('sexo',20)->nullable($value = true);
            $table->tinyInteger('no_tablet')->comment('Numero de tableta asignada')->nullable($value = true);
            $table->tinyInteger('no_equipo' )->comment('kit de uniforme asignado')->nullable($value = true);
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
        Schema::dropIfExists('guardias');
    }
}
