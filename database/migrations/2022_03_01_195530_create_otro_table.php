<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otros', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('titulo')->nullable();
            $table->string('autor')->nullable();
            $table->string('editorial')->nullable();
            $table->string('categoria')->nullable();
            $table->string('estatus')->nullable();
            $table->string('reseña')->nullable();
            $table->string('avance')->nullable();
            $table->string('comAvance')->nullable();
            $table->string('metaAnual')->nullable();
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
        Schema::dropIfExists('otro');
    }
}
