<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCarta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('custo')->unsigned()->nullable();
            $table->string('texto');
            $table->string('flavor');
            $table->integer('thougness')->unsigned()->nullable();
            $table->integer('power')->unsigned()->nullable();
            $table->integer('lealdade')->insigned()->nullable();
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartas');
    }
}
