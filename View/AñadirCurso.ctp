<h3>Añadir curso a profesor </h3>
<?php
echo $this->Form->create('Imparte');
echo $this->Form->input('cod_curso', array('type' => 'text', 'label' => 'Codigo del curso: '));
		
echo $this->Form->end('Añadir curso a profesor');
?>