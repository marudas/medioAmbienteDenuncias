<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Denuncias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipoDenuncia')->nullable();
            $table->string('rutDenunciante');
            $table->string('denunciado')->nullable();
            $table->string('direccionDenuncia')->nullable();
            $table->string('motivo')->nullable();
            $table->string('estado')->nullable();
            $table->string('file')->nullable();

            $table->foreign('rutDenunciante')->references('rutDenunciante')->on('denunciantes')->onDelete('restrict');
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
