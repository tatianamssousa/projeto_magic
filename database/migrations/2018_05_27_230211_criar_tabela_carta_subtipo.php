<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCartaSubtipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_subtipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carta_id')->unsigned();
            $table->integer('subtipo_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('carta_id','carta_subtipo_fk_carta')
//                ->references('id')
//                ->on('cartas');
//            $table->foreign('subtipo_id', 'carta_subtipo_fk_subtipo')
//                ->references('id')
//                ->on('subtipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carta_subtipos',function (Blueprint $table) {
            $table->dropForeign('carta_subtipo_fk_carta');
            $table->dropForeign('carta_subtipo_fk_subtipo');
        });
        Schema::dropIfExists('carta_subtipos');
    }
}
