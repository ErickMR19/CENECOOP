<div class = "index_grupos form">
    <fieldset>


    <h3>Grupos impartidos:</h3>
    <h1><?php echo __('Curso: '.$curso); ?></h1><br>

		<table>
			<tr>
				<th>Código del grupo</th>
				<th>Número de grupo</th>
				<th></th>
			</tr>

			<?php foreach ($grupos as $grupo): ?>
			<tr>
				<td><?php echo $grupo['grupos']['id']; ?></td>
				<td>
                    <?php
                    echo $this->Html->link(
                        $grupo['grupos']['NumGrupo'],
                        array('action' => 'indexEstudiantes', 'codCurso' => $curso, 'idGrupo'=>$grupo['grupos']['id'] ));
                    ?>
                </td>

			</tr>
			<?php endforeach; ?>
        </table>

    </fieldset>
</div>
