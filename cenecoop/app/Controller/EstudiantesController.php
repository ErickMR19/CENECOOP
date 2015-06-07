<?php
App::uses('AppController', 'Controller');
App::uses('Security', 'Utility');

class EstudiantesController extends AppController {
	
	// Codifica URL
	function encode( $url ) {
        return preg_replace(array('/\+/', '/\//'), array('-', '_'), base64_encode($url));
    }
 
	//Decodifica URL
    function decode( $url ) {
        return base64_decode(preg_replace(array('/-/', '/_/'), array('+', '/'), $url));
    }
	
	public function index() {
        $this->set('estudiantes', $this->Estudiante->find('all'));
    }
	
	public function view( $cedula = null ) {
	
        if ( !$cedula ) {
			throw new NotFoundException(__('Lista no encontrada'));
        }
		
        $estudiante = $this->Estudiante->findByid( $cedula );
        
		if ( !$estudiante ) {
            throw new NotFoundException(__('Lista no encontrada'));
        }
        
		$this->set('post', $estudiante);
    }
	
	// Agrega un estudiante a la base de datos
	public function agregar() {
			
		if ($this->request->is('post')) {
			
			$this->Estudiante->create();
			
			// Obtiene la cedula que enviada por URL
			$cedula = $this->passedArgs['cedula'];
			//$cedula = $this->request->params['named']['cedula']; //Alternativa
			
			// Decodifica la cedula
			$result = $this->decode( $cedula );
			
			// Desencripta la cedula
			$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
			$decrypt = Security::decrypt($result, $key);
			
			// Agrega cedula a $this->request->data
			$this->request->data['Estudiante']['id'] = $decrypt;
			
			//Guarda los datos del formulario en la tabla
			if ( $this->Estudiante->save( $this->request->data ) ) {
				
				$this->Session->setFlash(__('The user has been saved'));
                
				// Cedula
				$cedula = $this->data['Estudiante']['id'];
				
				// Encripta la cedula
				$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
				$encrypt = Security::encrypt( $cedula, $key );
				
				// Codifica la encripción para enviarla por URL
				$result = $this->encode( $encrypt );
				
				// Redireciona al tercer formulario de registro de estudiante
				return $this->redirect(array('controller' => 'autenticacions', 'action' => 'agregar', 'cedula' => $result));
            }
			else{
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
        }
    }
	
	// Modifica la informacion de un estudiante
	public function edit( $cedula = null ) {
		
		if (!$cedula) {
			throw new NotFoundException(__('Estudiante inválido'));
		}

		$estudiante = $this->Estudiante->findByid( $cedula );
		
		if (!$estudiante) {
			throw new NotFoundException(__('Estudiante inválido'));
		}

		if ($this->request->is(array('post', 'put'))) {
			
			$this->Estudiante->id = $cedula;
			
			if ($this->Estudiante->save($this->request->data)) {
				$this->Session->setFlash(__('La información del estudiante ha sido actualizada.'));
				return $this->redirect(array('controller'=>'estudiantes', 'action' => 'index'));
			}
			else{
				$this->Session->setFlash(__('La información del estudiante no pudo ser actualizada.'));
			}
		}

		if (!$this->request->data) {
			$this->request->data = $estudiante;
		}
	}

	
	// Elimina a un estudiante
	public function borrar( $cedula ) {
		
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Estudiante->delete( $cedula )) {
			$this->Session->setFlash(__('El estudiante con la cedula: %s ha sido eliminado.', h($cedula)));
		} 
		else {
			$this->Session->setFlash(__('El estudiante con la cedula: %s no se ha podido eliminar.', h($cedula)));
		}

		return $this->redirect(array('controller' => 'estudiantes', 'action' => 'index'));
	}

}