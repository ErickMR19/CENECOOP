<h3>Lista de profesores</h3>
<table>
    <tr>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Primer apellido</th>
		<th>Segundo apellido</th>
    </tr>

 

    <?php foreach ($personas as $persona): ?>
    <tr>
        <td><?php echo $persona['Persona']['id']; ?></td>
        <td>
	
            <?php echo $this->Html->link($persona['Persona']['nombre'],
array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
        </td>
        <td><?php echo $persona['Persona']['apellido1']; ?></td>
		
        <td><?php echo $persona['Persona']['apellido2']; ?></td>
		
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
                    array('controller' => 'profesors','action' => 'borrar', $persona['Persona']['id']),
                    array('confirm' => '¿Esta seguro de querer borrar el profesor?')
                );
            ?>
        </td>
           
		
    </tr>
    <?php endforeach; ?>
    <?php unset($persona); ?>
	<td>
	
	<p><p><p><p><p>
	
	<?php echo $this->Html->link(
    'Añadir persona',
    array('controller' => 'personas', 'action' => 'add')
); ?>

</td>
	
</table>