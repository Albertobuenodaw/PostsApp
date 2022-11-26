<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->string('calle')->nullable();
            $table->integer('numero')->nullable();
            $table->integer('codPostal')->nullable();
            $table->string('municipio')->nullable();

            /**Declaramos idUsuario ocmo id unsignedBigInteger*/
            $table->unsignedBigInteger('idUsuario')->nullable()->unique();
            /*Indicamos que este id es foreign key*/
            $table->foreign('idUsuario')->references('id')->on('usuarios');
            
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
        Schema::dropIfExists('direcciones');
    }
};
