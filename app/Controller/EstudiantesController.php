<?php
App::uses('AppController', 'Controller');
App::uses('Security', 'Utility');

class EstudiantesController extends AppController {

	public $helpers = array('Html', 'Form');
    public $components = array('Paginator');

    public $paginate = array(

        'limit' => 2,
        'order' => array(
            'PerfilDePersona.apellido1' => 'asc',
            'PerfilDePersona.apellido2' => 'asc',
            'PerfilDePersona.nombre' => 'asc'
        )
    );

    public function index() {
		$this->requieredAdmin();
		$this->set('title_for_layout', 'Lista de Estudiantes');
        $this->Paginator->settings = $this->paginate;

        // similar to findAll(), but fetches paged results
        $data = $this->Paginator->paginate('Estudiante');
        $this->set('estudiantes', $data);
    }

	// Codifica URL
	function encode( $url ) {
        return preg_replace(array('/\+/', '/\//'), array('-', '_'), base64_encode($url));
    }

	//Decodifica URL
    function decode( $url ) {
        return base64_decode(preg_replace(array('/-/', '/_/'), array('+', '/'), $url));
    }

	// Agrega un estudiante a la base de datos
	public function agregar_estudiante() {

		if ($this->request->is('post')) {

			$this->Estudiante->create();


			//Guarda los datos del formulario en la tabla
			if ( $this->Estudiante->saveAll( $this->request->data ) ) {

				// Redireciona al tercer formulario de registro de estudiante
				return $this->redirect(array('controller' => 'users', 'action' => 'index'));
            }
			else{
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
        }
    }
}
