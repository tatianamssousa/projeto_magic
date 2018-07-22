<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaNome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carta_id')->unsigned();
            $table->string('nome');
            $table->integer('lingua_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('carta_id','nome_fk_carta')
//                ->references('id')
//                ->on('cartas');
//            $table->foreign('lingua_id', 'nome_fk_lingua')
//                ->references('id')
//                ->on('linguas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nomes',function (Blueprint $table) {
            $table->dropForeign('nome_fk_carta');
            $table->dropForeign('nome_fk_lingua');
        });
        Schema::dropIfExists('nomes');
    }
}
