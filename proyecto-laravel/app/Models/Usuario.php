<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuario extends Model
{
    use HasFactory;

    const UPDATED_AT = 'false';
    public $timestamps=false;
    protected $table='usuarios';
    protected $fillable=['idUsuario','nombre','apellidos','email','dni','telefono','notificacionEmail','contrasenia','rol','validacion'];
    protected $primaryKey="idUsuario";

    static public function obtenerUsuarios(){

        return Usuario::all();

    }

    static public function obtenerUnUsuario($idUsuario){
        return Usuario::find($idUsuario);
    }

    static public function obtenerUsuarioCorreo($email){
        return DB::table('usuarios')->select('idUsuario')->where('email',$email)->get();
    }
}
