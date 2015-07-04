<h3>Periodos:</h3>
<table>
    <tr>
        <th>Año</th>
        <th>Trimestre</th>
        <th>Inicio</th>
		<th>Fin</th>
		<th>Inicio de matricula</th>
		<th>Fin de matricula</th>
    </tr>

 

    <?php foreach ($periodos as $periodo): ?>
    <tr>
        <td>
            <?php echo $periodo['Periodo']['anyo']; ?>
        </td>
        <td>
			<?php echo $periodo['Periodo']['trimestre']; ?>
		</td>
        <td>
			<?php echo $periodo['Periodo']['inicio']; ?>
		</td>
		<td>
			<?php echo $periodo['Periodo']['fin']; ?>
		</td>
		<td>
			<?php echo $periodo['Periodo']['inicio_matricula']; ?>
		</td>
		<td>
			<?php echo $periodo['Periodo']['fin_matricula']; ?>
		</td>
		
		
		<td>

            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('controller' => 'periodos','action' => 'borrar', $periodo['Periodo']['id']),
                    array('confirm' => '¿Esta seguro de querer borrar el periodo?')
                );
            ?>
        </td>
           
		
    </tr>
    <?php endforeach; ?>
    <?php unset($periodo); ?>
	<td>
	
	<p><p><p><p><p>
	
	<?php echo $this->Html->link('Añadir periodo', array('controller' => 'periodos', 'action' => 'agregar')); ?>

</td>
	
</table>