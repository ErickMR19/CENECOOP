<?php
App::uses('AppController', 'Controller');
CakePlugin::load('Recaptcha');
Configure::write('Config.language', 'spa');

class PersonasController extends AppController {

	public $components = array('Recaptcha.Recaptcha','Session');

	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('agregar_estudiante');
	}

	// Codifica URL
	function encode( $url ) {
        return preg_replace(array('/\+/', '/\//'), array('-', '_'), base64_encode($url));
    }

	//Decodifica URL
    function decode( $url ) {
        return base64_decode(preg_replace(array('/-/', '/_/'), array('+', '/'), $url));
    }

	// Agrega una persona estudiante a la base de datos
	public function agregar_estudiante() {
		$this->requieredNotLogin();
		 $this->layout="standalone";

		if ( $this->request->is('post')  || $this->request->is('put') ) {

			if($this->Persona->exists($this->request->data['Persona']['id']) )
			{
				$this->Session->setFlash(__('La Identificacion ya existe.'));
			}
			else
			{
				if ($this->Recaptcha->verify()) {
					$this->Persona->create();
					$this->request->data['PersonaUsuario']['rol'] = 'Estudiante';


					//Guarda los datos del formulario en la tabla
		            if ( $this->Persona->saveAll($this->request->data) ) {
						$this->Session->setFlash(__('El usuario fue guardado. Ya puede iniciar sesión'));
						return $this->redirect(array('controller' => 'users', 'action' => 'login'));
		            }
					else{
						$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
					}
				}
				else {
					// display the raw API error
					$this->Session->setFlash($this->Recaptcha->error);
				}
			}

        }
    }

	// Agrega una persona profesor a la base de datos
	public function agregar_profesor() {
		$this->requieredAdmin();
		$this->set('title_for_layout', 'Añadir un nuevo profesor');

		if ( $this->request->is('post')  || $this->request->is('put') ) {
			if($this->Persona->exists($this->request->data['Persona']['id']) )
			{
				$this->Session->setFlash(__('La Identificacion ya existe.'));
			}
			else
			{
				$this->Persona->create();
				$this->request->data['PersonaUsuario']['rol'] = 'Profesor';
				$this->request->data['PersonaProfesor']=array('id' => $this->request->data['Persona']['id']);
				//Guarda los datos del formulario en la tabla
	            if ( $this->Persona->saveAll($this->request->data) ) {

					return $this->redirect('/');
	            }
				else{
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			}

        }

	}

	// Agrega una persona administrador a la base de datos
	public function agregar_administrador() {
		$this->requieredAdmin();

		if ( $this->request->is('post')  || $this->request->is('put') ) {
			if($this->Persona->exists($this->request->data['Persona']['id']) )
			{
				$this->Session->setFlash(__('La Identificacion ya existe.'));
			}
			else
			{
				$this->Persona->create();
				$this->request->data['PersonaUsuario']['rol'] = 'Administrador';
				$this->request->data['PersonaAdministrador']=array('id' => $this->request->data['Persona']['id']);
				//Guarda los datos del formulario en la tabla
	            if ( $this->Persona->saveAll($this->request->data) ) {

					return $this->redirect(array('controller' => 'personas', 'action' => 'agregar_estudiante'));
	            }
				else{
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			}

        }

	}
}
