<?php

class CooperativasController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session','Paginator');

	 var $name = 'Cooperativas';

	public $paginate = array(

        'limit' => 15,
        'order' => array(
            'id' => 'asc'
        )
    );

    public function index() {
        $this->set('title_for_layout', 'Lista de Profesores');
        $this->Paginator->settings = $this->paginate;

        // similar to findAll(), but fetches paged results
        $data = $this->Paginator->paginate('Cooperativa');
        $this->set('cooperativas', $data);
    }



	public function add() {
		$this->requieredAdmin();
        if ($this->request->is('post')) {
            $this->Cooperativa->create();
            if ($this->Cooperativa->save($this->request->data)) {
                $this->Session->setFlash(__('Se guardó la Cooperativa correctamente'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('No se pudo guardar la Cooperativa'));
        }

    }

   /*public function import() {

        $messages = $this->Cooperativa->import('cooperativas.csv');
        debug($messages);
		$this->Session->setFlash(__('Archivo cargado correctamente '));
		return $this->redirect(array('action' => 'index'));
    }*/

	public function importar() {
		$this->requieredAdmin();
		$filename_temp = $this->request->data['Cooperativa']['Filename']['tmp_name'];
		$filename = $this->request->data['Cooperativa']['Filename']['name'];
		$filePath = TMP . 'uploads' . DS . 'Cooperativa' . DS . $filename;
		echo $filePath;

		if (move_uploaded_file($filename_temp, $filePath))
		{
	        $messages = $this->Cooperativa->import($filename);
	        debug($messages);
			$this->Session->setFlash(__('Archivo cargado correctamente '));
			unlink($filePath);
			return $this->redirect(array('action' => 'index'));
		}
		else
		{
			$this->Session->setFlash(__('No se pudo guardar la lista'));
		}

	}
}
