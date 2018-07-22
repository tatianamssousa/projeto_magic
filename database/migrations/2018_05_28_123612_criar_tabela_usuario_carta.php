<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaUsuarioCarta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_cartas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carta_id')->unsigned();
            $table->integer('edicao_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->integer('posse')->nullable();
            $table->integer('estado_id')->unsigned();
            $table->integer('lingua_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('carta_id','usuario_carta_fk_carta')
//                ->references('id')
//                ->on('cartas');
//            $table->foreign('edicao_id', 'usuario_carta_fk_edicao')
//                ->references('id')
//                ->on('edicoes');
//            $table->foreign('usuario_id','usuario_carta_fk_usuario')
//                ->references('id')
//                ->on('usuarios');
//            $table->foreign('estado_id', 'usuario_carta_fk_estado')
//                ->references('id')
//                ->on('estados');
//            $table->foreign('lingua_id', 'usuario_carta_fk_lingua')
//                ->references('id')
//                ->on('linguas');
//            $table->foreign('posse','usuario_carta_fk_posse')
//                ->references('id')
//                ->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_cartas',function (Blueprint $table) {
            $table->dropForeign('usuario_carta_fk_carta');
            $table->dropForeign('usuario_carta_fk_edicao');
            $table->dropForeign('usuario_carta_fk_usuario');
            $table->dropForeign('usuario_carta_fk_estado');
            $table->dropForeign('usuario_carta_fk_lingua');
            $table->dropForeign('usuario_carta_fk_posse');
        });

        Schema::dropIfExists('usuario_cartas');
    }
}
