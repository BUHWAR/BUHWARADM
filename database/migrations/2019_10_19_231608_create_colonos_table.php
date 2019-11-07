<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colonos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable($value = true);
            $table->unsignedBigInteger('fraccionamiento_id')->nullable($value = true);
            $table->foreign('fraccionamiento_id')->references('id')->on('fraccionamientos');
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('planes');
            $table->string('numero_cuenta')->nullable($value = true);
            $table->date('inicio_cicloFacturacion')->nullable($value = true);
            $table->date('fin_cicloFacturacion')->nullable($value = true);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('colonos');
    }
}
