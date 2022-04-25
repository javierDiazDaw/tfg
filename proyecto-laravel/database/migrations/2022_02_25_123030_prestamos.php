<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prestamos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table){
            $table->integer('Id')->index();
            $table->char('ISBN', 13)->unique();
            $table->foreign('ISBN')->references('ISBN')->on('libros')->onDelete('cascade');
            $table->date('FechaInicio');
            $table->char('FechaFin');
            $table->timestamp();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //si ya hay una tabla con el mismo nombre, la elimina
        Schema::dropIfExists('prestamos');
    }
}
