<h3>Añadir curso a profesor</h3>
<?php
echo $this->Form->create('Grupo');

	echo $this->Form->input('id', array('type' => 'text', 'label' => 'Cedula: '));	
			
			echo $this->Form->input('CodCurso', array(
            'options' => $lista_cursos,
			'empty' => true,
			'label' => 'Codigo del curso:'
        ));
	
	
				echo $this->Form->input('Cedulaprof', array(
            'options' => $prof,
			'empty' => true,
			'label' => 'Lista de profesores:'
        ));
	
	
		
		
		
echo $this->Form->end('Añadir curso al profesor');
?>