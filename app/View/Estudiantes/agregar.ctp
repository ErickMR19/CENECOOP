
<div class="estudiantes form">
<?php echo $this->Form->create('Estudiante'); ?>
    <fieldset>
        <legend><?php echo __('Registro Estudiante'); ?></legend>
        <?php
        echo $this->Form->input('EstudianteEsPersona.id', array('type' => 'text', 'label' => 'Cédula'));
        echo $this->Form->input('EstudianteEsPersona.email', array('type' => 'text', 'label' => 'Correo'));
        echo $this->Form->input('EstudianteEsPersona.nombre', array('type' => 'text', 'label' => 'Nombre'));
        echo $this->Form->input('EstudianteEsPersona.apellido1', array('type' => 'text', 'label' => 'Primer apellido'));
        echo $this->Form->input('EstudianteEsPersona.apellido2', array('type' => 'text', 'label' => 'Segundo apellido'));
        echo $this->Form->input('EstudianteEsPersona.telefono', array('type' => 'text', 'label' => 'Número telefónico'));
        echo $this->Form->input('EstudianteEsPersona.nacionalidad', array('type' => 'text', 'label' => 'Nacionalidad'));
        echo $this->Form->input('EstudianteEsPersona.edad', array('type' => 'text', 'label' => 'Edad'));

        echo __('Fecha de nacimiento:<br><br>');

        echo $this->Form->year('EstudianteEsPersona.ano', 1940, date('Y'));
        echo $this->Form->month('EstudianteEsPersona.mes');
        echo $this->Form->day('EstudianteEsPersona.dia');

        echo $this->Form->input('nivelacademico', array(
            'options' => array('Ninguno' => 'Ninguno', 'Primaria incompleta' => 'Primaria incompleta', 'Primaria completa' => 'Primaria completa', 'Secundaria incompleta' => 'Secundaria incompleta', 'Secundaria completa' => 'Secundaria completa', 'Tecnica incompleta' => 'Tecnica incompleta', 'Tecnica completa' => 'Tecnica completa', 'Universitaria incompleta' => 'Universitaria incompleta', 'Universitaria completa' => 'Universitaria completa', 'No indica' => 'No indica'),
			'label' => 'Nivel Académico'
			));
        echo $this->Form->input('provincia', array(
            'options' => array('San Jose' => 'San José', 'Alajuela' => 'Alajuela', 'Cartago' => 'Cartago', 'Heredia' => 'Heredia', 'Limon' => 'Limón', 'Guanacaste' => 'Guanacaste', 'Puntarenas' => 'Puntarenas'),
			'label' => 'Provincia'
			));
		echo $this->Form->input('canton', array('label' => 'Cantón'));
		echo $this->Form->input('region', array('label' => 'Región'));
		echo $this->Form->input('Estudiante.ocupacion', array('label' => 'Ocupación'));

    ?>
    </fieldset>
<?php echo $this->Form->end(__('Continuar')); ?>
</div>
