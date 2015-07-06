<?php
App::uses('AppModel', 'Model');

class Calificacion extends AppModel {

	// Validaciones de datos para la tabla calificaciones
    public $useTable = 'calificaciones';

    public $validate = array(

        'id' => array(
            'required' => array(
                'rule' => array('notEmpty')
            )
        ),
		'id_matriculas' => array(
            'required' => array(
                'rule' => array('notEmpty')
            )
        ),
		'nota' => array(
            'required' => array(
				'rule' => array('notEmpty'),
                'rule' => array('comparison', 'greater or equal', 0),
                'rule' => array('comparison', 'less or equal', 10)
            )
        ),
		'semana' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'rule' => array('comparison', 'greater or equal', 1)
            )
        )
    );

}
