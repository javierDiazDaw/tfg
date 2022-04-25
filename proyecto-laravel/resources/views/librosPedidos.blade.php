@extends('layouts.master')
@section('title', 'libros pedidos')
@section('content') 
<h1>Lista de peticiones</h1>
    <table border="1">
    <tr>
        <th>NOMBRE Y APELLIDOS</th>
        <th>EMAIL</th>
        <th>TITULO</th>        
    </tr>
    <?php foreach ($peticiones as $peticion): ?>   
        <tr>
            <td><?php echo $peticion['NombreApellidos']?></td>
            <td><?php echo $peticion['Email']?></td>
            <td><?php echo $peticion['Titulo']?></td>                        
        </tr>
    <?php endforeach; ?>
</table>
@endsection