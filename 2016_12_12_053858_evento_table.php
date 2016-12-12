<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function(Blueprint $table)) {
            $table->increments('id_evento');
            $table->date('fecha_evento');
            $table->text('descripcion_evento');
            //FALTA CREAR LAS TABLAS DE -LUGAR_EVENTO-, -DEPORTE_EVENTO-, LAS CUALES SE CONECTAN CON LAS TABLAS DE 'DEPORTES' Y 'LUGAR'.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('evento');
    }
}
