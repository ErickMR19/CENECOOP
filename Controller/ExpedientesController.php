<?php

class ExpedientesController extends AppController {

	public $helpers = array('Html', 'Form');

    public function index() {

				$usuario = $this->Auth->user();
				$cedula = $usuario['cedula'];

				$this->set('expedientes', $this->Expediente->find('all', array(
				    'joins' => array(
				        array(
				            'table' => 'cursos',
				            'alias' => 'Curso',
				            'type' => 'INNER',
				            'conditions' => array(
				                'Curso.id = Expediente.cod_curso',
								'Expediente.cedula_est' => $cedula
				            ),

				        )
				    ),
				    'fields' => array('Expediente.cod_curso','Curso.nombre_cur', 'Expediente.estado', 'Expediente.nota_final'),
				)));
    }
}
