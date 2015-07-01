
<h1>Planes de estudio</h1>
<p><?php echo $this->Html->link('Agregar plan', array('action' => 'add')); ?></p>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Código del plan</th>
            <th>Nombre del plan</th>
    		<th></th>
        </tr>
    </thead>
    <tbody>
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
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acción <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li>
                    <?php
                        echo $this->Form->postLink(
                            'Borrar',
                            array('action' => 'delete', $plandeestudio['Plandeestudio']['id']),
                            array('confirm' => '¿Estás seguro?')
                        );
                    ?>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                    <?php
                        echo $this->Html->link(
                            'Editar', array('action' => 'edit', $plandeestudio['Plandeestudio']['id'])
                        );
                    ?>
                </li>
              </ul>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
