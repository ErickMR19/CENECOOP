<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	// Validaciones de datos para la tabla autenticacions
	public $primaryKey = 'username';

	public $belongsTo = array(
		'PerfilDePersona' => array(
			'className' => 'Persona',
			'foreignKey' => 'cedula'
		)
	);

    public $validate = array(

        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Correo requerido'
            )
        ),
		'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Contraseña requerida'
            )
        ),
		'cedula' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Número de cédula requerido'
            )
        ),
		'rol' => array(
            'valid' => array(
                'rule' => array('inList', array('Estudiante', 'Profesor', 'Administrador')),
                'allowEmpty' => false
            )
        )
    );

	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $passwordHasher = new BlowfishPasswordHasher();
	        $this->data[$this->alias]['password'] = $passwordHasher->hash(
	            $this->data[$this->alias]['password']
	        );
	    }
	    return true;
	}

}
