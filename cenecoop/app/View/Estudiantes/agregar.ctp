
<div class="estudiantes form">
<?php echo $this->Form->create('Estudiante'); ?>
    <fieldset>
        <legend><?php echo __('Registro Estudiante'); ?></legend>
        <?php
        echo $this->Form->input('nivel_academico', array(
            'options' => array('Ninguno' => 'Ninguno', 'Primaria incompleta' => 'Primaria incompleta', 'Primaria completa' => 'Primaria completa', 'Secundaria incompleta' => 'Secundaria incompleta', 'Secundaria completa' => 'Secundaria completa', 'Tecnica incompleta' => 'Técnica incompleta', 'Tecnica completa' => 'Técnica completa', 'Universitaria incompleta' => 'Universitaria incompleta', 'Universitaria completa' => 'Universitaria completa', 'No indica' => 'No indica'),
			'empty' => true,
			'label' => 'Nivel Académico'
			));
        echo $this->Form->input('provincia', array(
            'options' => array('San Jose' => 'San José', 'Alajuela' => 'Alajuela', 'Cartago' => 'Cartago', 'Heredia' => 'Heredia', 'Limon' => 'Limón', 'Guanacaste' => 'Guanacaste', 'Puntarenas' => 'Puntarenas'),
			'empty' => true,
			'label' => 'Provincia'
			));
		echo $this->Form->input('canton', array('label' => 'Cantón'));
		echo $this->Form->input('region', array('label' => 'Región'));
		echo $this->Form->input('ocupacion', array('label' => 'Ocupación'));

    ?>
    </fieldset>
<?php echo $this->Form->end(__('Continuar')); ?>
</div>