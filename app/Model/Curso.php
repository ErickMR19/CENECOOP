<?php

class Curso extends AppModel {

	public $belongsTo = array(
		'CursoPlandeestudio' => array(
			'className' => 'Plandeestudio',
			'foreignKey' => 'cod_plan'
		)
	);

	public $validate = array(
        'id' => array(
            'required' => array(
                'rule' => array('checkValoresUnicos'),
                'message' => 'El curso ya existe',
            )
        ),
        'nombre_cur' => array(
			'rule' => 'notEmpty',
            'message' => 'Por favor introduzca el nombre del curso'
        ),
        'modulo' => array(
            'rule'    => '/^[0-9]*$/',
			'allowEmpty' => false,
            'message' => 'Por favor solo introduzca valores positivos'
        ),
        'bloque' => array(
           'rule'    => '/^[0-9]*$/',
			'allowEmpty' => false,
			'message' => 'Por favor solo introduzca valores positivos'
        ),
        'cod_plan' => array(
   			'rule' => 'notEmpty'
        )
    );

    public function checkValoresUnicos()
    {
        return ($this->find('count', array('conditions' => array('Curso.id' => $this->data['Curso']['id']))) == 0);
    }

}
