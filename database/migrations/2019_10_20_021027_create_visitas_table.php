<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('colono_id');
            $table->foreign('colono_id')->references('id')->on('colonos');
            $table->unsignedBigInteger('visitante_id');
            $table->foreign('visitante_id')->references('id')->on('visitantes');
            $table->date('fecha_visita');
            $table->string('nivel_sospecha');
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
        Schema::dropIfExists('visitas');
    }
}
