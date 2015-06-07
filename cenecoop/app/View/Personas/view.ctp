
<h3>Información de la persona: </h3>


<h1><p>Cédula: <?php echo h($post['Persona']['id']); ?></h1>

<h1><p>Nombre: <?php echo $post['Persona']['nombre']; ?></small></p></h1>

<h1><p>Primer apellido: <?php echo $post['Persona']['apellido1']; ?></small></p></h1>

<h1><p>Segundo apellido: <?php echo $post['Persona']['apellido2']; ?></small></p></h1>

<h1><p>Teléfono : <?php echo $post['Persona']['telefono']; ?></small></p></h1>

<h1><p>Nacionalidad : <?php echo $post['Persona']['nacionalidad']; ?></small></p></h1>

<h1><p>Edad:

<?php
function get_age( $birth_date ){
    return floor((time() - strtotime($birth_date))/31556926);
}

echo "".get_age( $post['Persona']['fecha_nacimiento']) ." años";
?>


</small></p></h1>

<h1><p>Género: <?php echo $post['Persona']['genero']; ?></small></p></h1>

<?php echo $this->Html->link('Volver', array('controller' => 'personas', 'action' => 'index')); ?>
