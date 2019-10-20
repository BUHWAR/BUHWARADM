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
            $table->string('nombre');
            $table->string('jefe_colonia');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
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
