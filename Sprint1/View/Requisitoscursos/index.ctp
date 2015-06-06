
<h1>Requisitos de cursos</h1>
<p><?php echo $this->Html->link('Agregar requisito', array('action' => 'add')); ?></p>

<table>
    <tr>
		<th>ID</th>
        <th>Código del curso</th>
        <th>Requisito</th>
		<th>Acciones</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out plan info -->

    <?php foreach ($requisitoscursos as $requisitoscurso): ?>
    <tr>
		<td><?php
                echo $this->Html->link(
                    $requisitoscurso['Requisitoscurso']['id'],
                    array('action' => 'view', $requisitoscurso['Requisitoscurso']['id'])
                );
            ?></td>
		<td><?php
	                echo $this->Html->link(
                    $requisitoscurso['Requisitoscurso']['cod_curso'],
                    array('controller' =>'cursos', 'action' => 'view', $requisitoscurso['Requisitoscurso']['cod_curso'])
                );
            ?></td>
        <td><?php
	                echo $this->Html->link(
                    $requisitoscurso['Requisitoscurso']['requisito'],
                    array('controller' =>'cursos', 'action' => 'view', $requisitoscurso['Requisitoscurso']['requisito'])
                );
            ?></td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('action' => 'delete', $requisitoscurso['Requisitoscurso']['id']),
                    array('confirm' => '¿Estás seguro?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $requisitoscurso['Requisitoscurso']['id'])
                );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>