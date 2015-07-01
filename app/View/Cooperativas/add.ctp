<!-- File: /app/View/Cooperativas/add.ctp -->
<div class="login-box">

	<div class="login-box-body">
        <p class="login-box-msg">Cooperativa Nueva</p>
        <?php echo $this->Form->create('Cooperativa'); ?>

        <div class="form-group has-feedback">
        <?php echo $this->Form->input('nombre_coop',array('type' => 'text','label' => false, 'class'=>'form-control', 'placeholder' => 'Nombre de la Cooperativa')); ?>
        </div>

        <div class="form-group has-feedback">
        <?php echo $this->Form->input('telefono_coop',array('type' => 'text','label' => false, 'class'=>'form-control', 'placeholder' => 'Teléfono')); ?>
        </div>

        <div class="row">

            <div class="col-xs-offset-4 col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Agregar</button>
            </div><!-- /.col -->

        </div>
        <?php echo $this->Form->end(); ?>

    </div>
</div>
