@extends('layouts.master')
@section('title', 'Crear editorial')
@section('content') 
    <form class="form-register" action="/editorials/crear" method="post" enctype="multipart/form-data">
        <h2>Crear editorial:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="Id" placeholder="id" class="input-100" required>               
            <input type="text" name="Nombre" placeholder="nombre" class="input-100" required>
            <input type="text" name="Nacionalidad" placeholder="nacionalidad" class="input-100" required>
            <input type="submit" name="submit" value="Registrar" class="btn-enviar">            
        </div>
    </form>
@endsection