<?php
App::uses('Validation', 'Utility');

class RequisitoscursosController extends AppController {
	
	public $helpers = array('Html', 'Form');
	
    public function index() {
        $this->set('requisitoscursos', $this->Requisitoscurso->find('all'));
    }
	
	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Requisito invalido'));
        }

        $prerequisito = $this->Requisitoscurso->findById($id);
        if (!$prerequisito) {
            throw new NotFoundException(__('Requisito invalido'));
        }
        $this->set('requisitoscurso', $prerequisito);
    }
	
	
	public function add() {
		$this->loadModel('Curso');
        $cursos = $this->Curso->find('list'); 
        $this->set('cursos', $cursos);
		
        if ($this->request->is('post')) {
            $this->Requisitoscurso->create();
            if ($this->Requisitoscurso->save($this->request->data)) {
                $this->Session->setFlash(__('Su requisito ha sido guardado.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Imposible crear el requisito.'));
        }
    }
	
	
	public function edit($id = null) {
		$this->loadModel('Curso');
        $cursos = $this->Curso->find('list');
        $this->set('cursos', $cursos);
	
		if (!$id) {
			throw new NotFoundException(__('Requisito invalido'));
		}

		$requisitoscurso = $this->Requisitoscurso->findById($id);
		if (!$requisitoscurso) {
			throw new NotFoundException(__('Requisito invalido'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Requisitoscurso->id = $id;
			if ($this->Requisitoscurso->save($this->request->data)) {
				$this->Session->setFlash(__('El requisito fue actualizado.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Imposible actualizar el requisito.'));
		}

		if (!$this->request->data) {
			$this->request->data = $requisitoscurso;
		}
	}
	
	
	public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Requisitoscurso->delete($id)) {
        $this->Session->setFlash(
            __('El requisito con ID: %s se ha eliminado.', h($id))
        );
    } else {
        $this->Session->setFlash(
            __('El requisito con ID: %s no pudo ser eliminado.', h($id))
        );
    }

    return $this->redirect(array('action' => 'index'));
	}

    
}