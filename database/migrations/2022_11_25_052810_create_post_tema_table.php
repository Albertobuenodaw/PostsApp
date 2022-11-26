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
        Schema::create('post_tema', function (Blueprint $table) {
           
            //Definiendo clave compuesta
            $table->primary(['post_id','tema_id']);

            //Creacion y referenciacion de la foreign key de posts
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');

            //Creacion y referenciacion de la foreign key de posts
            $table->unsignedBigInteger('tema_id');
            $table->foreign('tema_id')->references('id')->on('temas');
            
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
        Schema::dropIfExists('post_tema');
    }
};
