<div class = "index_estudiantes form">
    <fieldset>


    <h3>Lista de Estudiantes</h3>
    <h1><?php echo __('Curso: '.$curso); ?></h1>
    <h1><?php echo __('Grupo: '.$grupo); ?></h1><br>

		<table>
			<tr>
				<th>Cédula</th>
                <th>Nombre</th>
				<th>Primer Apellido</th>
                <th>Segundo Apellido</th>
				<th></th>
			</tr>

			<?php foreach ($estudiantes as $estudiante): ?>
			<tr>
                <td> <?php echo $estudiante['p']['id']; ?> </td>
				<td><?php echo $estudiante['p']['nombre']; ?></td>
                <td><?php echo $estudiante['p']['apellido1']; ?></td>
                <td><?php echo $estudiante['p']['apellido2']; ?></td>
                <td>
                    <?php
                    echo $this->Html->link(
                        'Agregar calificación',
                        array('action' => 'viewProf', 'ced' => $estudiante['p']['id'], 'grupo' => $grupo ));
                    ?>
                </td>

			</tr>
			<?php endforeach; ?>
        </table>

    </fieldset>
</div>
