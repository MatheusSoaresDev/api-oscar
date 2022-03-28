<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOscar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oscar', function (Blueprint $table) {
            $table->id();
            $table->string('local');
            $table->date('data')->unique();
            $table->string('cidade');
            $table->string('apresentador');
            $table->year('ano')->unique();
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
        Schema::dropIfExists('table_oscar');
    }
}
