<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteressadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interessados', function (Blueprint $table) {
            $table->increments('id_interessado');
            $table->date('data_interesse');
            $table->integer('id_oport')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->string('status', 100);
            $table->foreign('id_oport')->references('id_oport')->on('oportunidades');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interessados');
    }
}

