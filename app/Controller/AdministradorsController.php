<?php

App::uses('Security', 'Utility');


class AdministradorsController extends AppController {
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
        $this->set('title_for_layout', 'Lista de Administradores');
        $this->Paginator->settings = $this->paginate;

        // similar to findAll(), but fetches paged results
        $data = $this->Paginator->paginate('Administrador');
        $this->set('administradores', $data);
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