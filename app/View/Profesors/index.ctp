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
<?php foreach ($profesores as $profesor): ?>
        <tr>
            <td><?php echo h($profesor['Profesor']['id']); ?></td>
            <td><?php echo $profesor['PerfilDePersona']['nombre']; ?></td>
            <td><?php echo $profesor['PerfilDePersona']['apellido1']; ?></td>
            <td><?php echo $profesor['PerfilDePersona']['apellido2']; ?></td>
            <td><?php echo $profesor['PerfilDePersona']['telefono']; ?></td>
            <td><?php echo $profesor['PerfilDePersona']['nacionalidad']; ?></td>
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
<?php unset($profesores); ?>
