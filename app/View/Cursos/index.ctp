
<h1>Cursos académicos</h1>
<p><?php if ( $this->Autenticacion->checkAdmin() ) echo $this->Html->link('Agregar curso', array('action' => 'add')); ?></p>

<table class="table">
    <tr>
        <th>Código del curso</th>
        <th>Nombre del curso</th>
		<th>Módulo</th>
		<th>Bloque</th>
		<th>Plan</th>
		<th></th>
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
                    $curso['CursoPlandeestudio']['nombre_plan'],
                    array('controller' =>'plandeestudios', 'action' => 'view', $curso['Curso']['cod_plan'])
                );
            ?>
        </td>
        <?php if ( ! $this->Autenticacion->checkAdmin() ) continue; ?>
        <td>
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acción <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li>
                       <?php
                           echo $this->Form->postLink(
                               'Borrar',
                               array('action' => 'delete', $curso['Curso']['id']),
                               array('confirm' => '¿Estás seguro?')
                           );
                       ?>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                    <?php
                        echo $this->Html->link(
                            'Editar', array('action' => 'edit', $curso['Curso']['id'])
                        );
                    ?>
                </li>
              </ul>
            </div>
        </td>


    </tr>
    <?php endforeach; ?>

</table>
