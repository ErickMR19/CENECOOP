<div class="plandeestudios form">
<?php echo $this->Form->create('Plandeestudio'); ?>
    <fieldset>
        <legend><?php echo __('Agregar plan'); ?></legend>
        <?php 
        echo $this->Form->input('nombre_plan',array('label' => 'Nombre del plan'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Agregar plan')); ?>
</div>