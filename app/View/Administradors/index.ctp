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
<?php foreach ($administradores as $administrador): ?>
        <tr>
            <td><?php echo h($administrador['Administrador']['id']); ?></td>
            <td><?php echo $administrador['PerfilDePersona']['nombre']; ?></td>
            <td><?php echo $administrador['PerfilDePersona']['apellido1']; ?></td>
            <td><?php echo $administrador['PerfilDePersona']['apellido2']; ?></td>
            <td><?php echo $administrador['PerfilDePersona']['telefono']; ?></td>
            <td><?php echo $administrador['PerfilDePersona']['nacionalidad']; ?></td>
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
