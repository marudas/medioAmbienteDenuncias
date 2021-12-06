<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Denunciantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denunciantes', function (Blueprint $table) {
            $table->timestamps();
            $table->string('rutDenunciante');
            $table->string('nombreDenunciante');
            $table->string('direccionDenunciante');
            $table->string('celularDenunciante');
            $table->string('correoDenunciante')->nullable()->unique();

            $table->primary('rutDenunciante');
            
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
