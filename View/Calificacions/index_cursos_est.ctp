<div class = "index_cursos form">
    <fieldset>


    <h3>Cursos:</h3>

		<table>
			<tr>
				<th>Curso</th>
				<th>Grupo</th>
				<th></th>
			</tr>

			<?php foreach ($cursos as $curso): ?>
			<tr>
				<td><?php echo $curso['g']['CodCurso']; ?></td>
                <td><?php echo $curso['g']['NumGrupo']; ?></td>
				<td>
                    <?php
                    echo $this->Html->link(
                        'Ver',
                        array('action' => 'indexCalificaciones', $curso['m']['id']));
                    ?>
                </td>

			</tr>
			<?php endforeach; ?>
        </table>

    </fieldset>
</div>
