<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LugarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugar', function(Blueprint $table) {
            $table->increments('id_lugar');
            $table->string('direccion_lugar');
            $table->string('comuna_lugar');
            $table->string('deporte_practicable');
            $table->string('nombre_lugar');
            $table->string('descripcion_lugar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('lugar');
    }
}
