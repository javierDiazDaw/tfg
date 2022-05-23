<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    protected $usuarios;

    public function __construct(Usuario $usuarios)
    {
        $this->usuarios = $usuarios;
    }
    
    public function index()
    {
        $usuarios = $this->usuarios->obtenerUsuarios();
        return view('editarPerfilView', ['usuarios' => $usuarios]);
    }

    
    public function edit($idUsuario)
    {
        $usuario = $this->usuarios->obtenerUnUsuario($idUsuario);
        return view('editarPerfilView', ['usuario' => $usuario]);
    }

    
    public function update(Request $request, $idUsuario)
    {
        $usuario = Usuario::find($idUsuario);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->action([UsuarioController::class, 'index']);
    }
}

