<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCartaEdicao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_edicoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carta_id')->unsigned();
            $table->integer('ilustrador_id')->unsigned();
            $table->integer('edicao_id')->unsigned();
            $table->integer('numero')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('carta_id', 'carta_edicao_fk_carta')
                ->references('id')
                ->on('cartas');
            $table->foreign('ilustrador_id','carta_edicao_fk_ilustrador')
                ->references('id')
                ->on('ilustradores');
            $table->foreign('edicao_id','carta_edicao_fk_edicao')
                ->references('id')
                ->on('edicoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carta_edicoes',function (Blueprint $table) {
            $table->dropForeign('carta_edicao_fk_carta');
            $table->dropForeign('carta_edicao_fk_ilustrador');
            $table->dropForeign('carta_edicao_fk_edicao');
        });
        Schema::dropIfExists('carta_edicoes');
    }
}
