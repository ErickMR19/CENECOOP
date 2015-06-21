<!-- File: /app/View/Cooperativas/index.ctp -->

<h1>Cooperativas</h1>

<tr>
	   <?php
                echo $this->Html->link(
                    'Cargar Cooperativas', array('action' => 'import'),
					array('action' => 'cooperativas')
             );
            ?>
</tr>
<p><p>	
<?php echo $this->Html->link('Agregar Cooperativa Nueva', array('action' => 'add')); ?>
</p></p>

<table>
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