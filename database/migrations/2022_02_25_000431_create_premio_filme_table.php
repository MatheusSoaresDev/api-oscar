<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremioFilmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_producao', function (Blueprint $table) {
            $table->id();

            $table->boolean("vencedor")->default(false);

            $table->unsignedBigInteger('producao_id');
            $table->foreign('producao_id')->references('id')->on('premio_producao');

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
        Schema::dropIfExists('premio_filme');
    }
}
