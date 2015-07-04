
<h3>Expediente academico</h3>
<table>
    <tr>
        <th>Sigla del curso</th>
        <th>Nombre del curso</th>
        <th>Estado</th>
        <th>Nota</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out plan info -->

    <?php foreach ($expedientes as $expediente): ?>
    <tr>
        <td><?php echo $expediente['Expediente']['cod_curso']; ?></td>
        <td><?php echo $expediente['Curso']['nombre_cur']; ?></td>
        <td><?php echo $expediente['Expediente']['estado']; ?></td>
        <td><?php if($expediente['Expediente']['nota_final'] == -1){
                    echo 'MA';}
                  else{
                    echo $expediente['Expediente']['nota_final'];
                  } ?></td>
    </tr>
    <?php endforeach; ?>

</table>
