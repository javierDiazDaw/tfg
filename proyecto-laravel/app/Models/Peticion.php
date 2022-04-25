<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    use HasFactory;
    protected $table = 'peticiones';

    protected $fillable = ['NombreApellidos', 'Email', 'Titulo'];

    // public function obtenerPeticiones(){

    //     return Peticion::all();

    // }

}



