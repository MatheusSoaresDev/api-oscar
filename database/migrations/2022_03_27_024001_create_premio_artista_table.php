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
        Schema::create('artista_pessoa', function (Blueprint $table) {
            $table->id();

            $table->boolean("vencedor")->default(false);

            $table->unsignedBigInteger('pessoa_id');
            $table->foreign('pessoa_id')->references('id')->on('premio_pessoa');

            $table->unsignedBigInteger('artista_id');
            $table->foreign('artista_id')->references('id')->on('artista');

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
