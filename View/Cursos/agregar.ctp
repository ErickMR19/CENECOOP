<h3>Añadir curso a profesor</h3>
<?php
echo $this->Form->create('Curso');
echo $this->Form->input('id', array('type' => 'text', 'label' => 'Siglas del curso: '));
echo $this->Form->input('nombre_cur', array('type' => 'text', 'label' => 'Nombre del curso: '));
echo $this->Form->input('modulo', array('type' => 'text', 'label' => 'Modulo al que pertence: '));
echo $this->Form->input('bloque', array('type' => 'text', 'label' => 'Bloque al que pertence: '));
echo $this->Form->input('cod_plan', array('type' => 'text', 'label' => 'Plan al que pertence: '));

		
echo $this->Form->end('Añadir curso al profesor');
?>