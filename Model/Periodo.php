<?php
App::uses('AppModel', 'Model');

class Periodo extends AppModel {
	
	// Validaciones de datos para la tabla periodo
    
	public $validate = array(
        
        'id' => array(
            'required' => array(
                'rule' => array('notEmpty'),
				'rule' => array('isUnique')
            )
        ),
		'anyo' => array(
            'required' => array(
                'rule' => array('notEmpty')
            )
        ),
		'trimestre' => array(
            'valid' => array(
				'rule' => array('notEmpty')
            )
        ),
		'inicio' => array(
            'required' => array(
                'rule' => array('notEmpty'),
				'rule' => 'date',
				'message' => 'Debe seleccionar una fecha válida'
            )
        ),
		'fin' => array(
            'required' => array(
                'rule' => array('notEmpty'),
				'rule' => 'date',
				'message' => 'Debe seleccionar una fecha válida'
            )
        ),
		'inicio_matricula' => array(
            'required' => array(
                'rule' => array('notEmpty'),
				'rule' => 'date',
				'message' => 'Debe seleccionar una fecha válida'
            )
        ),
		'fin_matricula' => array(
            'required' => array(
                'rule' => array('notEmpty'),
				'rule' => 'date',
				'message' => 'Debe seleccionar una fecha válida'
            )
        )
    );
}