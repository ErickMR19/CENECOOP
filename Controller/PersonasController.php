<?php

App::uses('Security', 'Utility'); 
class PersonasController extends AppController {
    public $helpers = array('Html', 'Form');

	
    public function index() {
        $this->set('personas', $this->Persona->find('all'));
    }
	
	    public function view($Cedulaper = null) {
        if (!$Cedulaper) {
            throw new NotFoundException(__('Lista no encontrada'));
        }

        $persona = $this->Persona->findByid($Cedulaper);
        if (!$persona) {
            throw new NotFoundException(__('Lista no encontrada'));
        }
        $this->set('post', $persona);
    }
	
	    public function add() {
        if ($this->request->is('post')) {
            $this->Persona->create();
            if ($this->Persona->save($this->request->data)) {
                $this->Session->setFlash(__('El profesor ha sido guardado.'));
				// Cedula de Persona
				$Cedulaper = $this->data['Persona']['id'];
				// Encripta la cedula
				$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
				$encrypt = Security::encrypt( $Cedulaper, $key );
				// Codifica la encripción para enviarla por URL
				$result = preg_replace(array('/\+/','/\//'), array('-', '_'), base64_encode( $encrypt ));
				//$result = urlencode( $encrypt );
				
				
				// redirecciona al metodo encargado de guardar la cedula del profesor
				return $this->redirect(array('controller' => 'profesors', 'action' => 'agregar', 'cedula' => $result));
            }
            $this->Session->setFlash(__('Error al guardar el profesor.'));
			return $this->redirect(array('action' => 'index'));
        }

    }
	


	
	public function edit($Cedulaper = null) {
    
	if (!$Cedulaper) {
        throw new NotFoundException(__('Profesor no encontrado'));
    }

    $persona = $this->Persona->findByid($Cedulaper);
    if (!$persona) {
        throw new NotFoundException(__('Profesor no encontrado'));
    }

    if ($this->request->is(array('post', 'put'))) {
       
        if ($this->Persona->save($this->request->data)) {
            $this->Session->setFlash(__('El profesor a sido actualizado.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Ha ocurrido un error al actualizar el profesor.'));
    }

    if (!$this->request->data) {
        $this->request->data = $persona;
    }
}

public function borrar() {

			$Cedulaper = $this->passedArgs['cedula'];
			$result = base64_decode(preg_replace(array('/-/', '/_/'), array('+', '/'), $Cedulaper));
			// Desencripta la cedula
			$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
			$decrypt = Security::decrypt($result, $key);
			

	if (!$decrypt) {
        throw new NotFoundException(__('Profesor no encontrado'));
    }

    if ($this->Persona->delete($decrypt)) {
        $this->Session->setFlash(
            __('El profesor con la cedula: %s ha sido eliminado.', h($decrypt))
        );
    } else {
        $this->Session->setFlash(
           __('El profesor con la cedula: %s no se ha podido eliminar.', h($decrypt))
        );
    }
   return $this->redirect(array('action' => 'index'));
}

}