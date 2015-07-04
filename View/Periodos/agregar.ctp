
<div class="estudiantes form">
<?php echo $this->Form->create('Periodo'); ?>
    <fieldset>

        <legend><?php echo __('Crear Periodo:<br>Año '.date("Y")); ?></legend>
        <?php

		echo $this->Form->input('anyo', array('type' => 'hidden', 'value' => date('Y')));
		//echo $this->Form->input('anyo', array('type' => 'hidden', 'value' => 'Estupdiante'));

		echo $this->Form->input('trimestre', array(
            'options' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'),
			'empty' => true,
			'label' => 'Trimestre'
			));

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

		echo $this->Form->input('inicio', array('type' => 'date','label' => 'Fecha de inicio del periodo:', 'empty' => true, 'minYear' => date('Y'), 'maxYear' => date('Y'),'dateFormat' => 'DMY', 'monthNames' => $meses));

		echo $this->Form->input('fin', array('type' => 'date','label' => 'Fecha de fin del periodo:', 'empty' => true, 'minYear' => date('Y'), 'maxYear' => date('Y'),'dateFormat' => 'DMY', 'monthNames' => $meses));

		echo $this->Form->input('inicio_matricula', array('type' => 'date','label' => 'Fecha de inicio matricula:', 'empty' => true, 'minYear' => date('Y')-1, 'maxYear' => date('Y'),'dateFormat' => 'DMY', 'monthNames' => $meses));

		echo $this->Form->input('fin_matricula', array('type' => 'date','label' => 'Fecha de fin de matricula', 'empty' => true, 'minYear' => date('Y')-1, 'maxYear' => date('Y'),'dateFormat' => 'DMY', 'monthNames' => $meses));


    ?>
    </fieldset>
<?php echo $this->Form->end(__('Crear')); ?>
</div>
