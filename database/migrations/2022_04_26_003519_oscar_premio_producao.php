<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OscarPremioProducao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oscar_premio_producao', function (Blueprint $table) {
            $table->id();
            //$table->string("nome")->unique();

            $table->unsignedBigInteger('oscar_id');
            $table->foreign('oscar_id')->references('id')->on('oscar');

            $table->unsignedBigInteger('premio_producao_id');
            $table->foreign('premio_producao_id')->references('id')->on('premio_producao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
