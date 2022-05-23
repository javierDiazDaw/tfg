    @extends('layouts.master')
    @section('title', 'Editar perfil')
    @section('content') 
    <form class="form-register" action="/usuarios/editar/<?php echo $usuario->idUsuario?>" method="post" enctype="multipart/form-data">
        <h2>Editar usuario:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="ISBN" placeholder="ISBN" class="input-100" required value ="<?php echo $usuario->nombre?>">
            <input type="text" name="Titulo" placeholder="Titulo" class="input-100" required value ="<?php echo $usuario->apellidos?>">
            <input type="text" name="Autor" placeholder="Autor" class="input-100" required value ="<?php echo $usuario->email?>">
            <input type="text" name="Idioma" placeholder="Idioma" class="input-48" required value ="<?php echo $usuario->dni?>">
            <input type="number" name="Publicacion" placeholder="Publicacion" class="input-48" required value ="<?php echo $usuario->telefono?>">
            <input type="text" name="Editorial" placeholder="Editorial" class="input-100" required value ="<?php echo $usuario->roll?>">                            
            <input type="submit" name="submit" value="Registrar" class="btn-enviar">            
        </div>
    </form>
    @endsection
