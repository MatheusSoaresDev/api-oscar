<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremioArtistaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_artista', function (Blueprint $table) {
            $table->id();

            $table->boolean("vencedor")->default(false);

            $table->unsignedBigInteger('premio_pessoa_id');
            $table->foreign('premio_pessoa_id')->references('id')->on('premio_pessoa');

            $table->unsignedBigInteger('artista_id');
            $table->foreign('artista_id')->references('id')->on('artista');

            $table->unsignedBigInteger('filme_id');
            $table->foreign('filme_id')->references('id')->on('filme');

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
        Schema::dropIfExists('premio_artista');
    }
}
