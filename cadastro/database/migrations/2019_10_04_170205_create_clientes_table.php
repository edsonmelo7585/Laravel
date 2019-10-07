<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->integer('idade')->nullable();
            $table->string('endereco');
            $table->integer('numero_endereco');
            $table->string('comp_endereco')->nullable();
            $table->string('bairro');
            $table->bigInteger('cidade_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->string('email')->nullable();
            $table->foreign('cidade_id')->references('id')->on('estados');
            $table->foreign('estado_id')->references('id')->on('estados');
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
        Schema::dropIfExists('clientes');
    }
}
