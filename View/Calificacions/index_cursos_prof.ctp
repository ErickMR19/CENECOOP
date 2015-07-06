<div class = "index_cursos form">
    <fieldset>


    <h3>Cursos impartidos:</h3>

		<table>
			<tr>
				<th>Código del curso</th>
				<th>Nombre del curso</th>
				<th></th>
			</tr>

			<?php foreach ($cursos as $curso): ?>
			<tr>
				<td><?php echo $curso['c']['id']; ?></td>
				<td>
                    <?php
                    echo $this->Html->link(
                        $curso['c']['nombre_cur'],
                        array('action' => 'indexGrupos', $curso['c']['id']));
                    ?>
                </td>

			</tr>
			<?php endforeach; ?>
        </table>

    </fieldset>
</div>
