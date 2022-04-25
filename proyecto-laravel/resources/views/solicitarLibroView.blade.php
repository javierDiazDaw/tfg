@extends('layouts.master')
@section('title', 'Formulario de solicitud')
@section('content')
<div class="container">         
    <div class="row">
        <div class="col col-md-6 col-md-offset-3">
            <form action="/sendEmail/enviarEmail" method="post"> 
                <input type="text" placeholder= "Nombre y apellidos" name="NombreApellidos" required>
                <br>
                <input type="email" placeholder= "Email" name="Email" required>
                <br>
                <input type="text" placeholder= "Título" name="Titulo" required>
                <br><br>
                <button type="sumbit" >Aceptar</button>
            </form>
         </div>
    </div>
</div>
@endsection