<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCartaTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carta_id')->unsigned();
            $table->integer('tipo_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('carta_id','carta_tipo_fk_carta')
//                ->references('id')
//                ->on('cartas');
//            $table->foreign('tipo_id', 'carta_tipo_fk_tipo')
//                ->references('id')
//                ->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('carta_tipos',function (Blueprint $table) {
            $table->dropForeign('carta_tipo_fk_carta');
            $table->dropForeign('carta_tipo_fk_tipo');
        });
        Schema::dropIfExists('carta_tipos');
    }
}
