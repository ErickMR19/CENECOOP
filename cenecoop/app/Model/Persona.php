<?php
App::uses('AppModel', 'Model');

class Persona extends AppModel {
	
	// Validaciones de datos para la tabla personas
	
    public $validate = array(
        'id' => array(
            'required' => array(
                'rule' => array('notEmpty'),
				'message' => 'Número de cédula requerido',
            ),
			'between' => array(
				'rule' => array('between', 7, 9),
                'message' => 'Digite un número de cédula válido'
            ),
			'unique' => array(
				'rule' => array('checkUnique'),
				'message' => 'Este número de cédula ya está registrado.'
            )
        ),
        'nombre' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre requerido'
            )
        ),
		'apellido1' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Primer apellido requerido'
            )
        ),
		'apellido2' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Segundo apellido requerido'
            )
        ),
		'telefono' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Numero de telefono requerido'
            )
        ),
		'nacionalidad' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nacionalidad requerida'
            )
        ),
		'fecha_nacimiento' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Fecha de nacimiento requerida'
            )
        ),
        'genero' => array(
            'valid' => array(
                'rule' => array('inList', array('m', 'f')),
                'message' => 'Genero requerido',
                'allowEmpty' => false
            )
        ),
		'rol' => array(
            'valid' => array(
                'rule' => array('inList', array('Estudiante', 'Profesor', 'Administrador')),
                'allowEmpty' => false
            )
        )
    );
	
	
	public function checkUnique(){
        return ($this->find('count', array('conditions' => array('Persona.id' => $this->data['Persona']['id']))) == 0);
    }
}