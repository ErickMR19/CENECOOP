<?php
App::uses('AppModel', 'Model');

class MatriculaTemp extends AppModel {
	
	// Validaciones de datos para la tabla matricula_temp
	public $useTable = 'matricula_temp';
    
	public $validate = array(
        
        'cedula_est' => array(
            'required' => array(
                'rule' => array('notEmpty')
            )
        ),
		'cod_curso' => array(
            'required' => array(
                'rule' => array('notEmpty')
            )
        )
    );
	
}