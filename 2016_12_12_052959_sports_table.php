<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deportes', function(Blueprint $table){
            $table->increments('id_deporte');
            $table->string('nombre_deporte');
            $table->string('categoria_deporte');
            $table->text('descripcion_deporte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('deportes');
    }
}
