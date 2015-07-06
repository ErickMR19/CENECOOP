<div>
    <fieldset>

    <h3>Calificaciones:</h3>

		<table>
			<tr>
				<th>Semana</th>
                <th>Nota</th>
			</tr>

			<?php foreach ($calificaciones as $calificacion): ?>
			<tr>
                <td> <?php echo $calificacion['Calificaciones']['semana']; ?> </td>
				<td><?php echo $calificacion['Calificaciones']['nota']; ?></td>
			</tr>
			<?php endforeach; ?>
        </table>

    </fieldset>
</div>
