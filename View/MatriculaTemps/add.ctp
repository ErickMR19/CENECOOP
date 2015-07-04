<div class = "matriculas form">
    <fieldset>

    <?php
    $fechaActual = date('YMD');

    if( /*$fechaActual >= $inicioPeriodo AND $fechaActual <= $finPeriodo*/true ){


    }
    //echo __('algo'.$inicioPeriodo);
    //echo __('algo'.$finPeriodo);
    ?>

    <h3>Matricula:</h3>

		<table>
			<tr>
				<th>Código del curso</th>
				<th>Nombre del curso</th>
				<th></th>
			</tr>

			<?php foreach ($cursos as $curso): ?>
			<tr>
				<td><?php echo $curso['cursos']['id']; ?></td>
				<td><?php echo $curso['cursos']['nombre_cur']; ?></td>
				<td>

				   <?php
					    echo $this->Form->postLink(
                        'Matricular',
                        array('action' => 'matricular', $curso['cursos']['id']),
                        array('confirm' => '¿Está seguro?')
					    );
				    ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>

        <br><br>
        <p> <b>Nota:</b> Recuerde que solo puede matricular dos cursos cada período de matrícula </p>

        <br><br><br>
        <h3>Cursos pre-matriculados:</h3>

        <table>
			<tr>
				<th>Código del curso</th>
				<th>Nombre del curso</th>
				<th></th>
			</tr>

			<?php foreach ($cursosPre as $curso): ?>
			<tr>
				<td><?php echo $curso['c']['id']; ?></td>
				<td><?php echo $curso['c']['nombre_cur']; ?></td>
                <td>

				   <?php
					    echo $this->Form->postLink(
                        'Borrar',
                        array('action' => 'borrarMatricula', $curso['c']['id']),
                        array('confirm' => '¿Está seguro?')
					    );
				    ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>

        <br>
         <?php
         // Link
         //echo $this->Html->link('Finalizar matricula', array( 'action' => 'index'), array('confirm' => '¿Está seguro de finalizar la matricula?'));
         // Botón
         echo $this->Html->link($this->Form->button('Finalizar matricula'), array('action' => 'index'), array('escape'=>false,'title' => "Click para finalizar matricula", 'confirm' => '¿Está seguro de finalizar la matricula?'));
         ?>

    </fieldset>
</div>
