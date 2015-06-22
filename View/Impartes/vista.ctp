
<h3>El profesor:             <?php echo $this->Html->link($prof['Imparte']['cedula_prof'],
array('controller' => 'personas', 'action' => 'view', $prof['Imparte']['cedula_prof'])); ?>



<h1><p>Imparte los siguientes cursos:<p><p><p><h1>



<?php foreach ($cursos as $curso): ?>
 
 <p> <?php echo h($curso['Imparte']['cod_curso']); ?></h1>

 <?php endforeach;?>

<p>
<?php echo $this->Html->link('Volver',
array('controller' => 'personas', 'action' => 'index')); ?>

