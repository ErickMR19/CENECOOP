<?php

class Requisitoscurso extends AppModel {


	public $validate = array( 
			'cod_curso' => array(
			'rule' => array('noIguales'),
			'message' => 'El curso no puede ser requisito de el mismo.'
			),
			'requisito' => array(
			'required' => array(
			'rule' => array('isUnique', array('requisito', 'cod_curso'), false), 
			'message' => 'El requisito ya existe.')
			),			
	);
   
	public function noIguales(){
	    return ( $this->data['Requisitoscurso']['cod_curso'] != $this->data['Requisitoscurso']['requisito'] );
	}


}