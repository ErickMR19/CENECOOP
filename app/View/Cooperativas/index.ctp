<!-- File: /app/View/Cooperativas/index.ctp -->

<h1>Cooperativas</h1>


<p>
<?php echo $this->Html->link('Agregar Cooperativa Nueva', array('action' => 'add')); ?>
</p>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Telefono</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($cooperativas as $cooperativas): ?>
    <tr>
        <td><?php echo $cooperativas['Cooperativa']['id']; ?></td>
        <td>
            <?php echo $cooperativas['Cooperativa']['nombre_coop']; ?>
        </td>
        <td><?php echo $cooperativas['Cooperativa']['telefono_coop']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($cooperativas); ?>



	</table>
	<?php
	echo $this->Paginator->numbers(array(
	    'before' => '<nav><ul class="pagination">',
	    'separator' => '',
	    'currentClass' => 'active',
	    'currentTag' => 'a',
	    'tag' => 'li',
	    'after' => '</ul></navv>'
	));
	?>
	<?php unset($cooperativas); ?>

<br />
	<div>
<?php
	echo $this->Form->create(array('type' => 'file','action'=>'importar'));



	echo $this->Form->input('Filename', array(
		'between' => '<br />',
		'type' => 'file',
		'label' => 'Importar lista de cooperativas'
	));

	echo $this->Form->end('Subir');

?>

</div>
