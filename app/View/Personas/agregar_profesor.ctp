<div class="login-box">

	<div class="login-box-body">

		<p class="login-box-msg">Ingrese los datos del profesor</p>
		<?php echo $this->Form->create('Persona'); ?>

		<div class="form-group has-feedback">
			<?php echo $this->Form->input('Persona.id', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Cédula')); ?>
		</div>

		<div class="form-group has-feedback">
			<?php echo $this->Form->input('Persona.nombre', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Nombre')); ?>
		</div>

		<div class="form-group has-feedback">
			<?php echo $this->Form->input('Persona.apellido1', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Primer apellido')); ?>
		</div>

		<div class="form-group has-feedback">
			<?php echo $this->Form->input('Persona.apellido2', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Segundo apellido')); ?>
		</div>

		<div class="form-group has-feedback">
			<?php echo $this->Form->input('Persona.telefono', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Número telefónico')); ?>
		</div>

		<div class="form-group has-feedback">
			<?php echo $this->Form->input('Persona.nacionalidad', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Nacionalidad')); ?>
		</div>

		<div class="form-group has-feedback" style="text-align:center;">
			<label>Fecha de nacimiento
			<?php
				echo $this->Form->input('Persona.fecha_nacimiento', array(
					'label' => false,
					'dateFormat' => 'DMY',
					'minYear' => date('Y') - 95,
					'maxYear' => date('Y') - 12,
				));
			?></label>
		</div>

		<div class="form-group has-feedback">
			<?php echo $this->Form->input('Persona.genero',
			array(
				'options' => array(
						array('name'=>'Género','value'=>'',"selected"=>true,"disabled"=>true),
						'm' => 'Masculino',
						'f' => 'Femenino',
						'o' => 'Otro'
				),
				'label' => false,
				'class'=>'form-control',
				"required"=>true
			));
			?>
		</div>

		<div class="form-group has-feedback">
			<?php echo $this->Form->input('PersonaUsuario.username', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Correo Electrónico')); ?>
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		</div>
		<div class="row">

			<div class="col-xs-offset-4 col-xs-4">
				<button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
			</div><!-- /.col -->

		</div>
		<?php echo $this->Form->end(); ?>

	</div>
</div>
