<?php

class CooperativasController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	
	 var $name = 'Cooperativas';
	
    public function index() {
         $this->set('cooperativas', $this->Cooperativa->find('all'));
    }

    
	
	public function add() {
        if ($this->request->is('post')) {
            $this->Cooperativa->create();
            if ($this->Cooperativa->save($this->request->data)) {
                $this->Session->setFlash(__('Se guardó la Cooperativa correctamente'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('No se pudo guardar la Cooperativa'));
        }
	
    }
 
   public function import() {
	   
        $messages = $this->Cooperativa->import('cooperativas.csv');
        debug($messages);
		$this->Session->setFlash(__('Archivo cargado correctamente '));
		return $this->redirect(array('action' => 'index'));
    }
}
