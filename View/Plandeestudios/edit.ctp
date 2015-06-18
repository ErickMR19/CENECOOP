<div class="plandeestudios form">
<?php echo $this->Form->create('Plandeestudio'); ?>
    <fieldset>
        <legend><?php echo __('Editar plan'); ?></legend>
        <?php 
        echo $this->Form->input('nombre_plan',array('label' => 'Nombre del plan'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Guardar cambios')); ?>
</div>