<h3>Matricula temporal:</h3>
<table>
    <tr>
        <th>Cédula</th>
		<th>Código Curso</th>
		<th>Fecha de matricula</th>
    </tr>



    <?php foreach ($matriculatemps as $matriculatemp): ?>
    <tr>
        <td>
            <?php echo $matriculatemp['MatriculaTemp']['cedula_est']; ?>
        </td>
		<td>
			<?php echo $matriculatemp['MatriculaTemp']['cod_curso']; ?>
		</td>
		<td>
			<?php echo $matriculatemp['MatriculaTemp']['fecha_matricula']; ?>
		</td>

    </tr>
    <?php endforeach; ?>
    <?php unset($matriculatemp); ?>


</table>
