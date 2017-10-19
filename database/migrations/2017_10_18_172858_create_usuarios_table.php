<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nome', 100);
            $table->string('cpf', 100);
            $table->string('gereno', 20);
            $table->string('data_nasc', 100);
            $table->string('escolaridade', 100);
            $table->string('telefone', 50);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('estado', 100);
            $table->string('pais', 100);
            $table->string('email', 100);
            $table->string('senha', 100);
            $table->datetime('ultimo_login');
            $table->integer('tentativas_login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
