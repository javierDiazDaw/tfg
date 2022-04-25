<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table){
            $table->char('ISBN', 13)->unique();
            $table->string('Titulo');
            $table->string('Autor');
            $table->string('Idioma');
            $table->date('Publicacion');
            $table->integer('Editorial')->index();
            $table->foreign('Editorial')->references('Id')->on('editorials')->onDelete('cascade');
            $table->timestamp();            
        });
    }
    public function down()
    {
        //si ya hay una tabla con el mismo nombre, la elimina
        Schema::dropIfExists('libros');
    }
}
