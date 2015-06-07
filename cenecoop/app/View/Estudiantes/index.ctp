<h3>Lista de Estudiantes</h3>
<table>
    <tr>
        <th>Cédula</th>
        <th>Nivel Académico</th>
        <th>Provincia</th>
		<th>Cantón</th>
		<th>Región</th>
		<th>Ocupación</th>
    </tr>

 

    <?php foreach ($estudiantes as $estudiante): ?>
    <tr>
        <td>
			<?php echo $this->Html->link($estudiante['Estudiante']['id'],array('controller' => 'estudiantes', 'action' => 'view', $estudiante['Estudiante']['id'])); ?>
		</td>
        <td>
            <?php echo $estudiante['Estudiante']['nivel_academico']; ?>
        </td>
        <td>
			<?php echo $estudiante['Estudiante']['provincia']; ?>
		</td>
        <td>
			<?php echo $estudiante['Estudiante']['canton']; ?>
		</td>
		<td>
			<?php echo $estudiante['Estudiante']['region']; ?>
		</td>
		<td>
			<?php echo $estudiante['Estudiante']['ocupacion']; ?>
		</td>
		<td>
            <?php
                echo $this->Html->link(
                    'Editar',
                    array('controller' => 'estudiantes', 'action' => 'edit', $estudiante['Estudiante']['id'])
                );
            ?>
        </td>
		
		
		<td>

            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('controller' => 'estudiantes','action' => 'borrar', $estudiante['Estudiante']['id']),
                    array('confirm' => '¿Esta seguro de querer borrar al estudiante?')
                );
            ?>
        </td>
           
		
    </tr>
    <?php endforeach; ?>
    <?php unset($estudiante); ?>
	<td>
	
	<p><p><p><p><p>
	
	<?php echo $this->Html->link('Añadir estudiante', array('controller' => 'personas', 'action' => 'agregarEstudiante')); ?>

</td>
	
</table>