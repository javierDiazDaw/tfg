    @extends('layouts.master')
    @section('title', 'Crear editorial')
    @section('content') 
    <form class="form-register" action="/libros/editar/<?php echo $libro->ISBN?>" method="post" enctype="multipart/form-data">
        <h2>Editar libro:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="ISBN" placeholder="ISBN" class="input-100" required value ="<?php echo $libro->ISBN?>">
            <input type="text" name="Titulo" placeholder="Titulo" class="input-100" required value ="<?php echo $libro->Titulo?>">
            <input type="text" name="Autor" placeholder="Autor" class="input-100" required value ="<?php echo $libro->Autor?>">
            <input type="text" name="Idioma" placeholder="Idioma" class="input-48" required value ="<?php echo $libro->Idioma?>">
            <input type="date" name="Publicacion" placeholder="Publicacion" class="input-48" required value ="<?php echo $libro->Publicacion?>">
            <input type="number" name="Editorial" placeholder="Editorial" class="input-100" required value ="<?php echo $libro->Editorial?>">                            
            <input type="submit" name="submit" value="Registrar" class="btn-enviar">            
        </div>
    </form>
    @endsection
