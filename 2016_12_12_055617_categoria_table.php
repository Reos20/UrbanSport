<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_categoria');
            //FALTA CREAR LA TABLA -CATEGORIA-, DE TIPO CATEGORIA (WTF).
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
