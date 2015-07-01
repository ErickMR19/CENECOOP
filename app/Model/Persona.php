<?php
App::uses('AppModel', 'Model');

class Persona extends AppModel {

	public $hasOne = array(
        'PersonaUsuario' => array(
            'className' => 'User',
            'foreignKey' => 'cedula'
        ),
		'PersonaEstudiante' => array(
            'className' => 'Estudiante',
            'foreignKey' => 'id'
        ),
		'PersonaProfesor' => array(
            'className' => 'Profesor',
            'foreignKey' => 'id'
        ),
		'PersonaAdministrador' => array(
            'className' => 'Administrador',
            'foreignKey' => 'id'
        )
    );

	// Validaciones de datos para la tabla personas

    public $validate = array(
        'id' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Numero de cédula requerido',
            ),
			'length' => array(
                'rule'    => array('minLength', '7'),
                'message' => 'Digite un numero de cedula valido'
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
        )
    );
}
