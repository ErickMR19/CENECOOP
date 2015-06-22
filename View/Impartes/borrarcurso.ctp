<h3>Borrar curso a profesor</h3>
<?php
echo $this->Form->create('Imparte');

			echo $this->Form->input('cod_curso', array(
            'options' => $lista_cursos,
			'empty' => true,
			'label' => 'Codigo del curso:'
        ));
	
		
echo $this->Form->end('Borrar curso al profesor');
?>