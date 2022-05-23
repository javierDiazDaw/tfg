<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    const UPDATED_AT = 'false';
    public $timestamps=false;
    protected $table='incidencias';
    protected $fillable=['idIncidencia','idUsuario','titulo','descripcion','aula','fechaCreacion','fechaModificacion','fechaCierre','estado'];
    protected $primaryKey="idIncidencia";

    public function obtenerIncidencias(){

        return Incidencia::all();

    }

    public function obtenerUnLibro($idIncidencia){
        return Incidencia::find($idIncidencia);
    }
}
