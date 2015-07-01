<body class="login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html">Cenecoop</a>
	</div><!-- /.login-logo -->


	<div class="login-box-body">
	<h4 style="color:red;"><?php echo $this->Session->flash('auth');
			echo $this->Session->flash(); ?> </h4>
	<p class="login-box-msg">Ingrese sus datos para registrarse como estudiante</p>
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
		<?php echo $this->Form->input('PersonaEstudiante.nivel_academico',
		array(
			'options' => array(
					array('name'=>'Nivel Académico','value'=>'',"selected"=>true,"disabled"=>true),
					'Ninguno' => 'Ninguno',
					'Primaria incompleta' => 'Primaria incompleta',
					'Primaria completa' => 'Primaria completa',
					'Secundaria incompleta' => 'Secundaria incompleta',
					'Secundaria completa' => 'Secundaria completa',
					'Tecnica incompleta' => 'Tecnica incompleta',
					'Tecnica completa' => 'Tecnica completa',
					'Universitaria incompleta' => 'Universitaria incompleta',
					'Universitaria completa' => 'Universitaria completa',
					'No indica' => 'No indica'
			),
			'label' => false,
			'class'=>'form-control',
			"required"=>true
		));
		?>
	</div>

	<div class="form-group has-feedback">
		<?php echo $this->Form->input('PersonaEstudiante.provincia',
		array(
			'options' => array(
									array('name'=>'Provincia','value'=>'',"selected"=>true,"disabled"=>true),
									'San Jose' => 'San José',
									'Alajuela' => 'Alajuela',
									'Cartago' => 'Cartago',
									'Heredia' => 'Heredia',
									'Limon'=>'Limón',
									'Guanacaste' => 'Guanacaste',
									'Puntarenas' => 'Puntarenas'
			),
			'label' => false,
			'class'=>'form-control',
			"required"=>true
		));
		?>
	</div>

	<div class="form-group has-feedback">
		<?php echo $this->Form->input('PersonaEstudiante.canton', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Cantón')); ?>
	</div>

	<div class="form-group has-feedback">
		<?php echo $this->Form->input('PersonaEstudiante.region', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Región')); ?>
	</div>

	<div class="form-group has-feedback">
		<?php echo $this->Form->input('PersonaEstudiante.ocupacion', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Ocupación')); ?>
	</div>

	<div class="form-group has-feedback">
		<?php echo $this->Form->input('PersonaUsuario.username', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Correo Electrónico')); ?>
		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	</div>
	<div class="form-group has-feedback">
		<?php echo $this->Form->input('PersonaUsuario.password', array('label'=>false,'class'=>"form-control", 'placeholder'=>"Contraseña")); ?>
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	</div>
	<div class="form-group has-feedback">
		<?php echo $this->Recaptcha->display(); ?>
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	</div>
	<div class="row">

		<div class="col-xs-offset-4 col-xs-4">
			<button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
		</div><!-- /.col -->

	</div>
	<?php echo $this->Form->end(); ?>

</div>
