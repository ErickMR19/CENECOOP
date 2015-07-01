<div class="requisitoscursos form">
<?php echo $this->Form->create('Requisitoscurso'); ?>
    <fieldset>
        <legend><?php echo __('Editar requisito'); ?></legend>
        <?php 
        echo $this->Form->hidden('cod_curso');
		echo $this->Form->input('requisito',array('options' => $cursos, 'label' => 'Requisito'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Guardar cambios')); ?>
</div>