<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePremio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premio', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->unique();
            $table->foreignId('oscar_id')->constrained()->cascadeOnDelete();
            $table->timestamps();

            /*$table
                ->foreign('uuid_oscar')
                ->references('uuid')
                ->on('oscar')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premio');
    }
}
