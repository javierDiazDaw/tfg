<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    const UPDATED_AT = 'false';
    public $timestamps=false;
    protected $table='editorials';
    protected $fillable=['Id','Nombre','Nacionalidad'];

    public function obtenerEditorials(){

        return Libro::all();

    }
}


