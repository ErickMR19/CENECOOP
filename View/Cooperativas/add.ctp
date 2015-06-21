<!-- File: /app/View/Cooperativas/add.ctp -->

<h1>Agregar Cooperativa Nueva</h1>
<?php
echo $this->Form->create('Cooperativa');
echo $this->Form->input('nombre_coop');
echo $this->Form->input('telefono_coop');
echo $this->Form->end('Guardar Cooperativa');
?>