<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adms', function (Blueprint $table) {
            $table->increments('id_adm');
            $table->string('nome', 100);
            $table->string('login', 100);
            $table->string('senha', 100);
            $table->datetime('ultimo_login');
            $table->integer('tentativas_login');
            $table->integer('id_cidade')->unsigned();
            $table->foreign('id_cidade')->references('id_cidade')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adms');
    }
}
