<div class="requisitoscursos form">
<?php echo $this->Form->create('Requisitoscurso'); ?>
    <fieldset>
        <legend><?php echo __('Agregar requisito'); ?></legend>
        <?php 
        echo $this->Form->input('cod_curso',array('options' => $cursos, 'label' => 'Nombre del curso'));
		echo $this->Form->input('requisito',array('options' => $cursos, 'label' => 'Requisito'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Agregar requisito')); ?>
</div>