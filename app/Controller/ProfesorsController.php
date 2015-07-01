<?php

App::uses('Security', 'Utility');


class ProfesorsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Paginator');

    public $paginate = array(

        'limit' => 15,
        'order' => array(
            'PerfilDePersona.apellido1' => 'asc',
            'PerfilDePersona.apellido2' => 'asc',
            'PerfilDePersona.nombre' => 'asc'
        )
    );

    public function index() {
		$this->requieredAdmin();
        $this->set('title_for_layout', 'Lista de Profesores');
        $this->Paginator->settings = $this->paginate;

        // similar to findAll(), but fetches paged results
        $data = $this->Paginator->paginate('Profesor');
        $this->set('profesores', $data);
    }


	public function agregar() {

			$this->Profesor->create();

			$cedula = $this->passedArgs['cedula'];
			$result = base64_decode(preg_replace(array('/-/', '/_/'), array('+', '/'), $cedula));
			// Desencripta la cedula
			$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
			$decrypt = Security::decrypt($result, $key);

			$data =
    array(
        'Profesor' => array(
		'id' =>  $decrypt
        )
    );

	$this->Profesor->save($data);


	//$this->Estudiante->create();

			// Agrega cedula a $this->request->data
		//	$this->request->data['Estudiante']['cedula'] = $decrypt;
	return $this->redirect(array('controller' => 'personas', 'action' => 'index'));
}


public function borrar($cedula) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

				$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
				$encrypt = Security::encrypt( $cedula, $key );
				// Codifica la encripción para enviarla por URL
				$result = preg_replace(array('/\+/','/\//'), array('-', '_'), base64_encode( $encrypt ));
				//$result = urlencode( $encrypt );






    if ($this->Profesor->delete($cedula)) {
        $this->Session->setFlash(
            __('El profesor con la cedula: %s ha sido eliminado.', h($cedula))
        );
    } else {
        $this->Session->setFlash(
           __('El profesor con la cedula: %s no se ha podido eliminar.', h($cedula))
        );
    }

return $this->redirect(array('controller' => 'personas','action' => 'borrar', 'cedula' => $result));

}

}