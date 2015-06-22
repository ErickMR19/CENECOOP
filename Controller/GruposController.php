<?php

App::uses('Security', 'Utility'); 


class GruposController extends AppController {
    public $helpers = array('Html', 'Form');
		
 public function addGrupo() {
			
		$lista_cursos = ClassRegistry::init('Cursos')->find('list', array(
				'fields' => array('id','id')
			));	
			
			$lista_profesores = ClassRegistry::init('Profesores')->find('list', array(
				'fields' => array('id','id')
			));	
			
			 $this->set('prof', $lista_profesores );
			
		  $this->set('lista_cursos', $lista_cursos );
		 
			
        if ($this->request->is('post')) {
           
		   $this->Grupo->create();
			
			
            $this->request->data['Grupo']['NumGrupo'] = '0';
			$this->request->data['Grupo']['Cupo'] = '0';
			$this->request->data['Grupo']['NumEstudiantes'] = '0';
			$this->request->data['Grupo']['Horario'] = '0';
			$this->request->data['Grupo']['CodPeriodo'] = '2';
			

			$curso = $this->data['Grupo']['CodCurso'];
			$cedula = $this->data['Grupo']['Cedulaprof'];
			
			$countcurso = $this->profValido($cedula,$curso,1); 
			
			if($countcurso){
		  
		  if ($this->Grupo->save($this->request->data)) {
                
				$this->Session->setFlash(__('El grupo a sido otorgado al profesor.'));

				return $this->redirect(array('controller' => 'personas', 'action' => 'index'));

            }
            $this->Session->setFlash(__('Error al otorgar grupo al profesor.'));
			           // return $this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash(__('Error,el profesor no se le ha asignado ese curso'));
			           // return $this->redirect(array('action' => 'index'));
        }
    }
	

	//metodo encargado de validar si el profesor puede dar el curso al cual se le quiere otorgar un curso
		public function profValido($cedula ,$curso, $limit) {
				
		$cursos = ClassRegistry::init('Imparte')->find('count', array('conditions' => array('Imparte.cedula_prof' => $cedula , 'Imparte.cod_curso' => $curso))); //cuenta las tuplas "imparte" existentes que contienen al profesor especifico y al curso
		
		
        return $cursos > 0; //si el conteo de ese curso con ese profesor es mayor a 0 significa que el profesor esta en la capacidad de dar el curso
    }
		
	
}