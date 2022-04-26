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
        Schema::create('producao_filme', function (Blueprint $table) {
            $table->id();

            $table->boolean("vencedor")->default(false);

            $table->unsignedBigInteger('oscar_premio_producao_id');
            $table->foreign('oscar_premio_producao_id')->references('id')->on('oscar_premio_producao');

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
