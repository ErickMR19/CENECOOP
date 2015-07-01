<?php

class CursosController extends AppController {

    public $helpers = array('Html', 'Form','Autenticacion');

    public function index() {
        $this->set('cursos', $this->Curso->find('all'));
    }


	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Curso invalido'));
        }

        $curso = $this->Curso->findByid($id);
        if (!$curso) {
            throw new NotFoundException(__('Curso invalido'));
        }
        $this->set('curso', $curso);
    }


	public function add() {
		$this->requieredAdmin();
		$this->loadModel('Plandeestudio');
        $plandeestudios = $this->Plandeestudio->find('list', array('fields' => array('Plandeestudio.id', 'Plandeestudio.nombre_plan')));
        $this->set('plandeestudios', $plandeestudios);


        if ($this->request->is(array('post', 'put'))) {
            $this->Curso->create();
            if ($this->Curso->save($this->request->data)) {
                $this->Session->setFlash(__('Curso guardado.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Imposible crear el curso.'));
        }
    }


	public function edit($id = null) {
		$this->requieredAdmin();
		$this->loadModel('Plandeestudio');
        $plandeestudios = $this->Plandeestudio->find('list');
        $this->set('plandeestudios', $plandeestudios);

		if (!$id) {
			throw new NotFoundException(__('Curso invalido'));
		}

		$curso = $this->Curso->findByid($id);
		if (!$curso) {
			throw new NotFoundException(__('Curso invalido'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Curso->id = $id;
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('El curso fue actualizado.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Imposible actualizar el curso.'));
		}

		if (!$this->request->data) {
			$this->request->data = $curso;
		}
	}

	public function delete($id) {
		$this->requieredAdmin();
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    try{
        if ($this->Curso->delete($id)) {
            $this->Session->setFlash(
                __('El curso con ID: %s se ha eliminado.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('El curso con ID: %s no pudo ser eliminado.', h($id))
            );
        }
    }
    catch (Exception $e) {
    $this->Session->setFlash(
                __('El curso con ID: %s tiene asociado algún requisito, imposible eliminarlo.', h($id))
            );
    }

    return $this->redirect(array('action' => 'index'));
	}

}
