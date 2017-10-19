<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOportunidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidades', function (Blueprint $table) {
            $table->increments('id_oport');
            $table->string('titulo');
            $table->text('descricao');
            $table->string('status');
            $table->string('img_oportunidade');
            $table->integer('id_categoria')->unsigned();
            $table->integer('id_cidade')->unsigned();
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->foreign('id_cidade')->references('id_cidade')->on('cidades');
            $table->foreign('id_admin')->references('id_adm')->on('adms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oportunidades');
    }
}
