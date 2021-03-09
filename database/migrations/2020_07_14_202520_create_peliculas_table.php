<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('sinopsis')->default('sin descripción');
            $table->string('anio');
            $table->string('imagen')->default('http://placehold.it/200x300');
            $table->unsignedBigInteger('director_id');
            $table->unsignedBigInteger('genero_id');
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
        Schema::dropIfExists('peliculas');
    }
}
