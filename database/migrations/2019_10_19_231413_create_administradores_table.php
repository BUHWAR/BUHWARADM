<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_completo')->nullable($value = true);
            $table->string('telefono')->nullable($value = true);
            $table->boolean('estado')->nullable($value = true);
            $table->unsignedBigInteger('user_id')->nullable($value = true);
            $table->foreign('user_id')->references('id')->on('users')->nullable($value = true);
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
        Schema::dropIfExists('administradores');
    }
}
