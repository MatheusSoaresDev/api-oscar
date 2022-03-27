<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArtista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artista', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('nascimento');
            $table->string('nacionalidade');
            $table->string('localNascimento');
            $table->string('altura');
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
        Schema::dropIfExists('table_artista');
    }
}
