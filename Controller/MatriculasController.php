<?php

class MatriculasController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('matriculas', $this->Matricula->find('all'));
    }

		public function export() {
		$this->response->download("export.csv");
	  $_header = array('username', 'firstname', 'lastname', 'email');
	  $this->set('header',$_header);

			//Join de personas con matricula, y luego con users
    $data = $this->Matricula->query('SELECT u.username, p.nombre, p.apellido1
                                    FROM
                                    matriculas AS m
                                    INNER JOIN personas AS p
                                    ON (m.cedula_est = p.id)
                                    INNER JOIN users AS u
                                    ON (m.cedula_est = u.cedula)
                                    GROUP BY u.username, p.nombre, p.apellido1, u.username'
                                    );
    $this->set('data',$data);
    $this->layout = 'ajax';
    return;
	  }

}
