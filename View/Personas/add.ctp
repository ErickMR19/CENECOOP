<h3>Añadir persona</h3>
<?php
echo $this->Form->create('Persona');
echo $this->Form->input('id', array('type' => 'text', 'label' => 'Cedula: '));
echo $this->Form->input('nombre', array('type' => 'text', 'label' => 'Nombre: '));
echo $this->Form->input('apellido1', array('type' => 'text', 'label' => 'Primer apellido: '));
echo $this->Form->input('apellido2', array('type' => 'text', 'label' => 'Segundo apellido: '));
echo $this->Form->input('telefono', array('type' => 'text', 'label' => 'Telefono: '));
echo $this->Form->input('nacionalidad', array('type' => 'text', 'label' => 'Nacionalidad: '));
	
	$meses = array(
						''=>'',
						'01'=>'Enero',
						'02'=>'Febrero',
						'03'=>'Marzo',
						'04'=>'Abril',
						'05'=>'Mayo',
						'06'=>'Junio',
						'07'=>'Julio',
						'08'=>'Agosto',
						'09'=>'Setiembre',
						'10'=>'Octubre',
						'11'=>'Noviembre',
						'12'=>'Diciembre'
					);
		

echo $this->Form->input('fecha_nacimiento', array('type' => 'date','label' => 'Fecha de nacimiento', 'empty' => true, 'minYear' => date('Y')-100, 'maxYear' => date('Y')-15, 'dateFormat' => 'DMY', 'monthNames' => $meses));
		echo $this->Form->input('genero', array(
            'options' => array('m' => 'Masculino', 'f' => 'Femenino'),
			'empty' => true,
			'label' => 'Género'
        ));
		
		//echo $this->Form->input('rol', array('type' => 'hidden', 'value' => 'Profesor'));
		
echo $this->Form->end('Añadir persona');
?>