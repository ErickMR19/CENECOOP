<?php


class Administrador extends AppModel {

    public $useTable = 'administradores';

    public $belongsTo = array(
        'PerfilDePersona' => array(
            'className' => 'Persona',
            'foreignKey' => 'id'
        )
    );

}
