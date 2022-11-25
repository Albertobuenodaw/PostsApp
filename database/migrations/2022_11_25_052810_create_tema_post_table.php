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
        Schema::create('tema_post', function (Blueprint $table) {
            $table->id();
            //Creacion y referenciacion de la foreign key de posts
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');

            //Creacion y referenciacion de la foreign key de posts
            $table->unsignedBigInteger('tema_id');
            $table->foreign('tema_id')->references('id')->on('tema');
            
            $table->timestamps();
            $table->unsignedBigInteger('tema_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tema_post');
    }
};
