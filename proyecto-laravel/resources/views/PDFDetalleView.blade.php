<h1>Libro</h1>
        <table border="1">
        <tr>
            <th>ISBN</th>
            <th>TITULO</th>
            <th>AUTOR</th>
            <th>IDIOMA</th>
            <th>PUBLICACION</th>
            <th>EDITORIAL</th>            
        </tr>        
        <tr>
            <td><?php echo $libro['ISBN']?></td>
            <td><?php echo $libro['Titulo']?></td>
            <td><?php echo $libro['Autor']?></td>
            <td><?php echo $libro['Idioma']?></td>
            <td><?php echo $libro['Publicacion']?></td>
            <td><?php echo $libro['Editorial']?></td>            
        </tr>            
    </table>