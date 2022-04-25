<h1>Lista de libros</h1>
    <table border="1">
    <tr>
        <th>ISBN</th>
        <th>TITULO</th>        
    </tr>
    <?php foreach ($libros as $libro): ?>   
        <tr>
            <td><?php echo $libro['ISBN']?></td>
            <td><?php echo $libro['Titulo']?></td>            
        </tr>
    <?php endforeach; ?>
</table>
