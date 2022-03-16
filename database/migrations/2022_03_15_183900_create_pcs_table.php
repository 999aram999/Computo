<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcs', function (Blueprint $table) {
            $table->id();
            $table->string('Num')->nullable();
            $table->string('Marca')->nullable();
            $table->string('Monitor')->nullable();
            $table->string('RAM')->nullable();
            $table->string('Procesador')->nullable();
            $table->string('Estatus')->nullable();
            $table->string('Conexion')->nullable();
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
        Schema::dropIfExists('pcs');
    }
}
