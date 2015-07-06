<div>
    <fieldset>

    <h3>Estudiante:</h3>
    <h1><?php echo __($nombre.' '.$apellido1.' '.$apellido2); ?></h1><br>

    <br><h3>Calificaciones:</h3>
		<table>
			<tr>
				<th>Semana</th>
                <th>Nota</th>
				<th>Acciones</th>
			</tr>

			<?php foreach ($calificaciones as $calificacion): ?>
			<tr>
                <td> <?php echo $calificacion['Calificaciones']['semana']; ?> </td>
				<td><?php echo $calificacion['Calificaciones']['nota']; ?></td>
                <td>
                    <?php
                    echo $this->Form->postLink(
                        'Borrar',
                        array('action' => 'borrar', $calificacion['Calificaciones']['id']));
                    ?>
                </td>

			</tr>
			<?php endforeach; ?>
        </table>

    </fieldset>
</div>





<div>
<h3>Agregar calificación:</h3>
    <?php echo $this->Form->create('Calificacion', array('action' => 'add')); ?>

    <fieldset>
    <?php

		echo $this->Form->input('id_matriculas', array('type' => 'hidden', 'value' => $idMatricula ));
        echo $this->Form->input('semana', array('label' => 'Semana'));
        echo $this->Form->input('nota', array('label' => 'Nota'));

    ?>
    </fieldset>
    <?php echo $this->Form->end(__('Agregar calificación')); ?>
</div>
