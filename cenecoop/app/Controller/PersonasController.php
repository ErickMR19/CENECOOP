<?php
App::uses('AppController', 'Controller');

class PersonasController extends AppController {
	
	// Codifica URL
	function encode( $url ) {
        return preg_replace(array('/\+/', '/\//'), array('-', '_'), base64_encode($url));
    }
 
	//Decodifica URL
    function decode( $url ) {
        return base64_decode(preg_replace(array('/-/', '/_/'), array('+', '/'), $url));
    }
	
	public function index() {
        $this->set('personas', $this->Persona->find('all'));
    }
	
	
	public function view( $cedula = null ) {
	
        if ( !$cedula ) {
			throw new NotFoundException(__('Lista no encontrada'));
        }
		
        $persona = $this->Persona->findByid( $cedula );
        
		if ( !$persona ) {
            throw new NotFoundException(__('Lista no encontrada'));
        }
        
		$this->set('post', $persona);
    }
	
	
	// Agrega una persona estudiante a la base de datos
	public function agregarEstudiante() {
		
        if ($this->request->is(array('post', 'put'))) {
            
			$this->Persona->create();
			
			//Guarda los datos del formulario en la tabla
            if ( $this->Persona->save($this->request->data) ) {
				
				$this->Session->setFlash(__('User saved.'));
				
				// Cedula de Persona
				$cedula = $this->data['Persona']['id'];
				
				// Encripta la cedula
				$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
				$encrypt = Security::encrypt( $cedula, $key );
				
				// Codifica la encripción para enviarla por URL
				$result = $this->encode( $encrypt );
				
				// Redireciona al segundo formulario de registro de estudiante
				return $this->redirect(array('controller' => 'estudiantes', 'action' => 'agregar', 'cedula' => $result));
            }
			else{
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
        }
    }
	
	
	// Agrega una persona profesor a la base de datos
	public function agregarProfesor() {
		
	}
	
	// Agrega una persona administrador a la base de datos
	public function agregarAdmin() {
		
	}
}