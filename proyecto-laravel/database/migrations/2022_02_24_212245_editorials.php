<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Editorials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editorials', function (Blueprint $table){
            $table->integer('Id')->index();
            $table->string('Nombre');
            $table->string('Nacionalidad');
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
        Schema::dropIfExists('editorials');
    }
}
