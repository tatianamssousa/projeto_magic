<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCartaSupertipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_supertipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carta_id')->unsigned();
            $table->integer('supertipo_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('carta_id', 'carta_supertipo_fk_carta')
                ->references('id')
                ->on('cartas');
            $table->foreign('supertipo_id','carta_supertipo_fk_supertipo')
                ->references('id')
                ->on('supertipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carta_supertipos',function (Blueprint $table) {
            $table->dropForeign('carta_supertipo_fk_supertipo');
            $table->dropForeign('carta_supertipo_fk_carta');
        });
        Schema::dropIfExists('carta_supertipos');
    }
}
