<?php

class Plandeestudio extends AppModel {

	public $validate = array(
			'nombre_plan' => array(
			'rule' => 'isUnique',
			'message' => 'Ya existe un plan con ese nombre.'
			)
	);
    
}