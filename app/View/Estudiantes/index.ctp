<table class="table table-striped">
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Telefono</th>
            <th>Nacionalidad</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($estudiantes as $estudiante): ?>
        <tr>
            <td><?php echo $estudiante['Estudiante']['id']; ?></td>
            <td><?php echo $estudiante['PerfilDePersona']['nombre']; ?></td>
            <td><?php echo $estudiante['PerfilDePersona']['apellido1']; ?></td>
            <td><?php echo $estudiante['PerfilDePersona']['apellido2']; ?></td>
            <td><?php echo $estudiante['PerfilDePersona']['telefono']; ?></td>
            <td><?php echo $estudiante['PerfilDePersona']['nacionalidad']; ?></td>
        </th>
<?php endforeach; ?>
    </tbody>
</table>
<?php
echo $this->Paginator->numbers(array(
    'before' => '<nav><ul class="pagination">',
    'separator' => '',
    'currentClass' => 'active',
    'currentTag' => 'a',
    'tag' => 'li',
    'after' => '</ul></navv>'
));
?>
<?php unset($post); ?>
