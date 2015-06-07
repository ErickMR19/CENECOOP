
<h3>Información del estudiante: </h3>


<h1><p>Cédula: <?php echo h($post['Estudiante']['id']); ?></h1>

<h1><p>Nivel Académico: <?php echo $post['Estudiante']['nivel_academico']; ?></small></p></h1>

<h1><p>Provincia: <?php echo $post['Estudiante']['provincia']; ?></small></p></h1>

<h1><p>Cantón: <?php echo $post['Estudiante']['canton']; ?></small></p></h1>

<h1><p>Región: <?php echo $post['Estudiante']['region']; ?></small></p></h1>

<h1><p>Ocupación: <?php echo $post['Estudiante']['ocupacion']; ?></small></p></h1>

<?php echo $this->Html->link('Volver', array('controller' => 'estudiantes', 'action' => 'index')); ?>
