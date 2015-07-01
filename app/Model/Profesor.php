<?php


class Profesor extends AppModel {

    public $useTable = 'profesores';

    public $belongsTo = array(
        'PerfilDePersona' => array(
            'className' => 'Persona',
            'foreignKey' => 'id'
        )
    );

}
