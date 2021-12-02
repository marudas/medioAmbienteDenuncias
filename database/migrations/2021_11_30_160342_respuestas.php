<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Respuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('idDenuncia')->unsigned();
            $table->string('correoFuncionario');
            $table->string('respuesta');

            $table->foreign('idDenuncia')->references('id')->on('denuncias')->onDelete('restrict');
            $table->foreign('correoFuncionario')->references('email')->on('users')->onDelete('restrict');
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
