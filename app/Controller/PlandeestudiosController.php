<?php

class PlandeestudiosController extends AppController {

	public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('plandeestudios', $this->Plandeestudio->find('all'));
    }

	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Plan invalido'));
        }

        $plan = $this->Plandeestudio->findById($id);
        if (!$plan) {
            throw new NotFoundException(__('Plan invalido'));
        }
        $this->set('plandeestudio', $plan);
    }

	public function add() {
		$this->requieredAdmin();
        if ($this->request->is('post')) {
            $this->Plandeestudio->create();
            if ($this->Plandeestudio->save($this->request->data)) {
                $this->Session->setFlash(__('Su plan ha sido guardado.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Imposible crear el plan.'));
        }
    }

	public function edit($id = null) {
		$this->requieredAdmin();
		if (!$id) {
			throw new NotFoundException(__('Plan invalido'));
		}

		$plan = $this->Plandeestudio->findById($id);
		if (!$plan) {
			throw new NotFoundException(__('Plan invalido'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Plandeestudio->id = $id;
			if ($this->Plandeestudio->save($this->request->data)) {
				$this->Session->setFlash(__('El plan fue actualizado.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Imposible actualizar el plan.'));
		}

		if (!$this->request->data) {
			$this->request->data = $plan;
		}
	}

	public function delete($id) {
		$this->requieredAdmin();
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    try{
        if ($this->Plandeestudio->delete($id)) {
            $this->Session->setFlash(
                __('El plan con ID: %s se ha eliminado.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('El plan con ID: %s no pudo ser eliminado.', h($id))
            );
        }
    }
    catch (Exception $e) {
    $this->Session->setFlash(
                __('El plan con ID: %s tiene asociado cursos, imposible eliminarlo.', h($id))
            );
    }

    return $this->redirect(array('action' => 'index'));
	}

}
