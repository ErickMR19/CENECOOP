<div class="cursos form">
<?php echo $this->Form->create('Curso'); ?>
    <fieldset>
        <legend><?php echo __('Agregar curso'); ?></legend>
        <?php 
        echo $this->Form->input('id', array('type' => 'text', 'label' => 'Código del plan')); 
		echo $this->Form->input('nombre_cur',array('label' => 'Nombre del curso'));
		echo $this->Form->input('modulo',array('label' => 'Módulo'));
		echo $this->Form->input('bloque',array('label' => 'Bloque'));
		echo $this->Form->input('cod_plan',array('options' => $plandeestudios, 'label' => 'Plan'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Agregar curso')); ?>
</div>