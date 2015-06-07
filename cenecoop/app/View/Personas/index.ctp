<h3>Lista de Personas</h3>
<table>
    <tr>
        <th>Cédula</th>
        <th>Nombre</th>
        <th>Primer apellido</th>
		<th>Segundo apellido</th>
    </tr>

 

    <?php foreach ($personas as $persona): ?>
    <tr>
        <td>
			<?php echo $this->Html->link($persona['Persona']['id'],array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
        <td>
            <?php echo $persona['Persona']['nombre']; ?>
        </td>
        <td>
			<?php echo $persona['Persona']['apellido1']; ?>
		</td>
        <td>
			<?php echo $persona['Persona']['apellido2']; ?>
		</td>
		<td>
            <?php
                echo $this->Html->link(
                    'Editar',
                    array('action' => 'edit', $persona['Persona']['id'])
                );
            ?>
        </td>
		
		
		<td>

            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('controller' => 'personas', 'action' => 'borrar', $persona['Persona']['id']),
                    array('confirm' => '¿Esta seguro de querer borrar a la persona?')
                );
            ?>
        </td>
           
		
    </tr>
    <?php endforeach; ?>
    <?php unset($persona); ?>
	<td>
	
	<p><p><p><p><p>
	
	<?php echo $this->Html->link('Añadir estudiante', array('controller' => 'personas', 'action' => 'agregarEstudiante')); ?>
	<br>
	<?php echo $this->Html->link('Añadir profesor', array('controller' => 'personas', 'action' => 'agregarEstudiante')); ?>
	<br>
	<?php echo $this->Html->link('Añadir administrador', array('controller' => 'personas', 'action' => 'agregarEstudiante')); ?>

</td>
	
</table>