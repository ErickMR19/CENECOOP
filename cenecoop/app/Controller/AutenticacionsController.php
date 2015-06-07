<?php
App::uses('AppController', 'Controller');
App::uses('Security', 'Utility');

class AutenticacionsController extends AppController {
	
	// Codifica URL
	function encode( $url ) {
        return preg_replace(array('/\+/', '/\//'), array('-', '_'), base64_encode($url));
    }
 
	//Decodifica URL
    function decode( $url ) {
        return base64_decode(preg_replace(array('/-/', '/_/'), array('+', '/'), $url));
    }
	
	
	// Agrega datos de autenticacion a la base de datos
	public function agregar() {
			
		if ($this->request->is('post')) {
			
			$this->Autenticacion->create();
			
			// Obtiene la cedula que enviada por URL
			$cedula = $this->passedArgs['cedula'];
			//$cedula = $this->request->params['named']['cedula']; //Alternativa
			
			// Decodifica la cedula
			$result = $this->decode( $cedula );
				
			// Desencripta la cedula
			$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
			$decrypt = Security::decrypt($result, $key);
			
			// Agrega cedula a $this->request->data
			$this->request->data['Autenticacion']['cedula'] = $decrypt;
			
			//Guarda los datos del formulario en la tabla
			if ( $this->Autenticacion->save( $this->request->data ) ) {
				$this->Session->setFlash(__('The user has been saved'));
				return $this->redirect(array('controller' => 'personas','action' => 'index'));
			}
			else{
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
        }
    }
}