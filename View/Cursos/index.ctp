
<h1>Cursos académicos</h1>
<p><?php echo $this->Html->link('Agregar curso', array('action' => 'add')); ?></p>

<table>
    <tr>
        <th>Código del curso</th>
        <th>Nombre del curso</th>
		<th>Módulo</th>
		<th>Bloque</th>
		<th>Plan</th>
		<th>Acciones</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out plan info -->
	
	<?php foreach ($cursos as $curso): ?>
    <tr>
        <td><?php echo $curso['Curso']['id']; ?></td>
		<td><?php
                echo $this->Html->link(
                    $curso['Curso']['nombre_cur'],
                    array('action' => 'view', $curso['Curso']['id'])
                );
            ?></td>
		<td><?php echo $curso['Curso']['modulo']; ?></td>
		<td><?php echo $curso['Curso']['bloque']; ?></td>
		
		<td><?php
	                echo $this->Html->link(
                    $curso['Curso']['cod_plan'],					
                    array('controller' =>'plandeestudios', 'action' => 'view', $curso['Curso']['cod_plan'])
                );
            ?></td>
		 <td>
            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('action' => 'delete', $curso['Curso']['id']),
                    array('confirm' => '¿Estás seguro?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $curso['Curso']['id'])
                );
            ?>
        </td>

        
    </tr>
    <?php endforeach; ?>
	
</table>