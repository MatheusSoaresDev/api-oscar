<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGeneroFilme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero_filme', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('genero');

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
        Schema::dropIfExists('table_genero_filme');
    }
}
