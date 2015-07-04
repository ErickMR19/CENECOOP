
<h1>Matricula</h1>

<table>
    <tr>
        <th>Cedula estudiante</th>
		<th>Código de curso</th>
		<th>Código de grupo</th>
		<th>Estado</th>
		<th>Nota Final</th>
<!-- Here's where we loop through our $posts array, printing out plan info -->

	<?php foreach ($matriculas as $matricula): ?>
    <tr>
        <td><?php echo $matricula['Matricula']['cedula_est']; ?></td>
		<td><?php echo $matricula['Matricula']['cod_curso']; ?></td>
		<td><?php echo $matricula['Matricula']['cod_grupo']; ?></td>
		<td><?php echo $matricula['Matricula']['estado']; ?></td>
		<td><?php echo $matricula['Matricula']['nota_final']; ?></td>

    </tr>
    <?php endforeach; ?>
</table>

<?php echo $this->Html->link('Descargar CSV', array('action' => 'export')); ?>
