<?php

App::uses('Security', 'Utility'); 


class ProfesorsController extends AppController {
    public $helpers = array('Html', 'Form');
		
	
	public function agregar() {
		
			$this->Profesor->create();

			$cedula = $this->passedArgs['cedula'];
			$result = base64_decode(preg_replace(array('/-/', '/_/'), array('+', '/'), $cedula));
			// Desencripta la cedula
			$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
			$decrypt = Security::decrypt($result, $key);
			
			$data = 
    array(
        'Profesor' => array(
		'id' =>  $decrypt 
        )
    );
	
	$this->Profesor->save($data);
	return $this->redirect(array('controller' => 'personas', 'action' => 'index'));
}



public function borrar() {
	
	

	$cedula = $this->passedArgs['ced'];
	
	
				$key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
				$encrypt = Security::encrypt( $cedula, $key );
				// Codifica la encripción para enviarla por URL
				$result = preg_replace(array('/\+/','/\//'), array('-', '_'), base64_encode( $encrypt ));
				//$result = urlencode( $encrypt );
				
				
	

	

    if ($this->Profesor->delete($cedula)) {
        $this->Session->setFlash(
            __('El profesor con la cedula: %s ha sido eliminado.', h($cedula))
        );
    } else {
        $this->Session->setFlash(
           __('El profesor con la cedula: %s no se ha podido eliminar.', h($cedula))
        );
    }

return $this->redirect(array('controller' => 'personas','action' => 'borrar', 'cedula' => $result));

}

}