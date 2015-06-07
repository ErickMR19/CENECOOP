<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class Autenticacion extends AppModel {
	
	// Validaciones de datos para la tabla autenticaciones
	public $useTable = 'users';
	
    public $validate = array(
        
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
				'rule' => array('isUnique'),
                'message' => 'Esta cuenta de correo ya está registrada.'
            )
        ),
		'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Contraseña requerida'
            )
        ),
		'repassword' => array(
            'valid' => array(
				'rule' => array('validatePasswords'),
                'message' => 'Las contraseñas no coinciden.'
            )
        ),
		'cedula' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Número de cédula requerido'
            )
        )
    );
	
	// Valida que contrasena y recontrasena sean iguales
	public function validatePasswords() {
		return $this->data[$this->alias]['password'] === $this->data[$this->alias]['repassword'];
	}
	
	 //Revisar el tamaño del campo contrasena para poder usar el BlowfishPasswordHasher!!
	// Encripta la contraseña antes de guardarla en la tabla
	public function beforeSave($options = array()) {
		
		if ( isset($this->data[$this->alias]['password']) ) {
			
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash( $this->data[$this->alias]['password'] );
		}
		return true;
	}
	
}