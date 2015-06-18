
<h1>Planes de estudio</h1>
<p><?php echo $this->Html->link('Agregar plan', array('action' => 'add')); ?></p>

<table>
    <tr>
        <th>Código del plan</th>
        <th>Nombre del plan</th>
		<th>Acciones</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out plan info -->

    <?php foreach ($plandeestudios as $plandeestudio): ?>
    <tr>
        <td><?php echo $plandeestudio['Plandeestudio']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $plandeestudio['Plandeestudio']['nombre_plan'],
                    array('action' => 'view', $plandeestudio['Plandeestudio']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('action' => 'delete', $plandeestudio['Plandeestudio']['id']),
                    array('confirm' => '¿Estás seguro?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $plandeestudio['Plandeestudio']['id'])
                );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>