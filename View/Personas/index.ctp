<h3>Lista de profesores</h3>
<table>
    <tr>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Primer apellido</th>
		<th>Segundo apellido</th>
    </tr>

 

    <?php foreach ($personas as $persona): ?>
    <tr><br/>
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
                    array('controller' => 'impartes','action' => 'borrartodo', $persona['Persona']['id']),
                    array('confirm' => '¿Esta seguro de querer borrar el profesor?')
                );
            ?>
        </td>
           
		 <td>
            <?php
                echo $this->Html->link(
                    'Ver cursos',
                    array('controller' => 'impartes','action' => 'vista', 'cedula' => $persona['Persona']['id'])
                );
            ?>
        </td>
		   
		 <td>
            <?php
                echo $this->Html->link(
                    'Otorgar curso',
                    array('controller' => 'impartes','action' => 'addcurso', 'cedula' => $persona['Persona']['id'])
                );
            ?>
        </td>
		
    </tr>
	
		 <td>
            <?php
                echo $this->Html->link(
                    'Borrar curso',
                    array('controller' => 'impartes','action' => 'borrarcurso', 'cedula' => $persona['Persona']['id'])
                );
            ?><br/><br/><br/>
        </td>
	
	
			 <td>
            <?php
                echo $this->Html->link(
                    'Añadir grupo',
                    array('controller' => 'grupos','action' => 'addGrupo')
                );
            ?>
        </td>
	
    <?php endforeach; ?>
    <?php unset($persona); ?>
	<td>
	
	
	<br/><br/><br/><br/>
	<?php echo $this->Html->link(
    'Añadir persona',
    array('controller' => 'personas', 'action' => 'add')
); ?>

</td>
	
</table>