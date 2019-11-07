<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFraccionaminetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fraccionamientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable($value = true);
            $table->string('jefe_colonia')->nullable($value = true);
            $table->string('telefono')->nullable($value = true);
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->double('latitud')->nullable($value = true);
            $table->double('longitud')->nullable($value = true);
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
        Schema::dropIfExists('fraccionamientos');
    }
}
