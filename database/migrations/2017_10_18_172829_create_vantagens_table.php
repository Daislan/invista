<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVantagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vantagens', function (Blueprint $table) {
            $table->increments('id_vantagem');
            $table->text('descricao');
            $table->integer('id_oport')->unsigned();
            $table->foreign('id_oport')->references('id_oport')->on('oportunidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vantagens');
    }
}
