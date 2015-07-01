<div class="login-box">

	<div class="login-box-body">

    	<p class="login-box-msg">Agregar curso</p>
        <?php echo $this->Form->create('Curso'); ?>

        <div class="form-group has-feedback">
            <?php echo $this->Form->input('id', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder' => 'Código del Curso')); ?>
        </div>

    	<div class="form-group has-feedback">
            <?php echo $this->Form->input('nombre_cur',array('label' => false, 'class'=>'form-control', 'placeholder' => 'Nombre del curso')); ?>
    	</div>

        <div class="form-group has-feedback">
    		<?php echo $this->Form->input('modulo',array('type' => 'text','label' => false, 'class'=>'form-control', 'placeholder' => 'Módulo')); ?>
    	</div>

    	<div class="form-group has-feedback">
    		<?php echo $this->Form->input('bloque',array('type' => 'text','label' => false, 'class'=>'form-control', 'placeholder' => 'Bloque')); ?>
    	</div>

    	<div class="form-group has-feedback">
    		<?php
                array_unshift($plandeestudios, array('name'=>'Plan de Estudios','value'=>'',"selected"=>true,"disabled"=>true) );
                echo $this->Form->input('cod_plan',array('options' => $plandeestudios, 'label' => false, 'class'=>'form-control', 'placeholder' => 'Plan'));
            ?>
    	</div>

		<div class="row">

			<div class="col-xs-offset-4 col-xs-4">
				<button type="submit" class="btn btn-primary btn-block btn-flat">Agregar</button>
			</div><!-- /.col -->

		</div>
		<?php echo $this->Form->end(); ?>

    </div>
</div>
