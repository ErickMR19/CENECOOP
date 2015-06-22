<?php


class Persona extends AppModel {



    public $validate = array(
        'id' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Número de cédula requerido',
            ),
			'lengthMin' => array(
                'rule'    => array('minLength', '1'),
                'message' => 'Digite un número de cédula válido'
            ),
			'lengthMax' => array(
                'rule'    => array('maxLength', '13'),
                'message' => 'Digite un número de cédula válido'
            ),
			'unique' => array(
               'rule' => array('checkUniqueUser'),
                'message' => 'Este número de cédula ya está registrado.'
            )
        ),
			
        
        'nombre' => array(
            'rule'    => '/^[a-zA-Z-" "]*$/',
			'allowEmpty' => false,
            'message' => 'Por favor solo introduzca letras en el nombre'
        ),
        'apellido1' => array(
            'rule'    => '/^[a-zA-Z]*$/',
			'allowEmpty' => false,
            'message' => 'Por favor solo introduzca letras en el apellido'
        ),
        'apellido2' => array(
           'rule'    => '/^[a-zA-Z]*$/',
			'allowEmpty' => false,
			'message' => 'Por favor solo introduzca letras en el apellido'
        ),
        'telefono' => array(
            'rule' => 'numeric',
			'allowEmpty' => false,
        ),
        'nacionalidad' => array(
            'rule'    => '/^[a-zA-Z]*$/',
			'allowEmpty' => false,
            'message' => 'Por favor introduzca una nacionalidad valida'
        ),
        'fecha_nacimiento' => array(
			'rule' => 'date',
			'allowEmpty' => false
        ),
        'genero' => array(
			//'rule'    => '/^[a-zA-Z]*$/',
			'rule' => array('inList',array('m','f')),
			'allowEmpty' => false,
            'message' => 'Por favor introduzca un genero valido'
        )
    );
	
function checkUniqueUser() {
    return ($this->find('count', array('conditions' => array('Persona.id' => $this->data['Persona']['id']))) == 0);
}
		
		
		
		}