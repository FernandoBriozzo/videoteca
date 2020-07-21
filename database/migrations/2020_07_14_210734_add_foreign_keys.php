<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peliculas', function (Blueprint $table) {
            $table->foreign('director_id')->references('id')->on('directors');
            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peliculas', function (Blueprint $table) {
            $table->dropForeign('peliculas_director_id_foreign');
            $table->dropForeign('peliculas_genero_id_foreign');
        });
    }
}
