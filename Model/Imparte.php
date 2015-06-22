<?php


class Imparte extends AppModel {

public $useTable = 'imparte';


    public $validate = array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Sigla del curso requerido'
		
		));
}