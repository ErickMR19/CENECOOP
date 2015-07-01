<div class="login-box">

	<div class="login-box-body">

    	<p class="login-box-msg">Agregar Plan de Estudio</p>
            <?php echo $this->Form->create('Plandeestudio'); ?>

            <div class="form-group has-feedback">
                <?php
                echo $this->Form->input('nombre_plan',array('label' => false, 'class'=>'form-control', 'placeholder' => 'Nombre del plan'));
                ?>
            </div>

            <div class="row">

                <div class="col-xs-offset-4 col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Agregar </button>
                </div><!-- /.col -->

            </div>
            <?php echo $this->Form->end(); ?>

        </div>
</div>
