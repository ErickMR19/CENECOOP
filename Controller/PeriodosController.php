<?php
App::uses('AppController', 'Controller');

class PeriodosController extends AppController {
	
    public function index() {
        $this->set('periodos', $this->Periodo->find('all'));
    }
	
	// Agrega un periodo
    public function agregar() {
        
		if ( $this->request->is('post') ) {
            
			$this->Periodo->create();
			
            if ($this->Periodo->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
			else{
				$this->Session->setFlash(__('Unable to add your post.'));
			}
		}
    }
	
	
	// Elimina un periodo
	public function borrar( $id ) {
		
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Periodo->delete( $id )) {
			$this->Session->setFlash(__('El periodo ha sido eliminado'));
		}
		else {
			$this->Session->setFlash(__('El periodo no se ha podido eliminar'));
		}

		return $this->redirect(array('controller' => 'periodos', 'action' => 'index'));
	}
}