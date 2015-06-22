<?php

App::uses('Security', 'Utility'); 
class ImpartesController extends AppController {
   
   public $helpers = array('Html', 'Form');
	
	
	//Metodo encargado de agregar cursos que va a impartir el profesor especifico a la tabla impartes
	
	    public function addCurso() {
			
		$cedula = $this->passedArgs['cedula']; //le entra de parametro la cedula
			
		$lista_cursos = ClassRegistry::init('Cursos')->find('list', array('fields' => array('id','id')));	//Genera una lista de todos los cursos existentes en la base de datos
		
		  
		  $this->set('lista_cursos', $lista_cursos ); //se envia la lista a la view
			
        if ($this->request->is('post')) {
           
		   $this->Imparte->create();
		   
			$this->request->data['Imparte']['cedula_prof'] = $cedula; //se guarda la cedula del profesor
            
			$curso = $this->data['Imparte']['cod_curso']; //Y la sigla elegida del curso
			
			$countcurso = $this->cursoOtorgado($cedula,$curso,1); //se genera una variable que llama al metodo encargado de buscar si al profesor ya se le otorgo ese curso 
			
			if($countcurso){ //si countcurso no encontro anteriormente el curso
		  
		  if ($this->Imparte->save($this->request->data)) { //guarda la nueva tupla de imparte
                
				$this->Session->setFlash(__('El curso a sido otorgado al profesor.'));

				return $this->redirect(array('controller' => 'personas', 'action' => 'index'));

            }
            $this->Session->setFlash(__('Error al otorgar el curso al profesor.'));
			           // return $this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash(__('Error, ese curso ya habia sido otorgado al profesor.')); //en el caso que countcurso ya encontrara el curso
			           // return $this->redirect(array('action' => 'index'));
        }
    }
	
	
	//Metodo encargado de borrar todas las tuplas que imparte un profesor, esto se utiliza para el caso de que el profesor sea eliminado 
	
	public function borrartodo($cedula) {
				    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
	
	$gruposOtorgados = ClassRegistry::init('Grupos')->find('count', array('conditions' => array('Grupos.CedulaProf' => $cedula))); //busca en la tabla de grupos si el profesor tiene grupos asigandos
		
		if($gruposOtorgados == '0'){ //si la cantidad de grupos asignados del profesor es 0 se puede eliminiar
		
		 $cursos = $this->Imparte->find('all', array('conditions' => array('Imparte.cedula_prof' => $cedula))); //se hace un array de todods las tuplas de imparte que contengan la cedula del profesor
				 
		 foreach ($cursos as $curso):  //cada una de las tuplas guardadas en el array anteriorm son eliminadas
 
			$this->Imparte->delete($curso['Imparte']['id']);
			
			endforeach;
				
				
		return $this->redirect(array('controller' => 'profesors','action' => 'borrar', 'ced' => $cedula)); //se redirecciona al borrar de profesor
		}
		
		
					
			        $this->Session->setFlash( __('Error, el profesor que quiere borrar tiene grupos asignados')); //si la cantidad de grupos asignados del profesor es distinta a 0 no se puede eliminiar
					return $this->redirect(array('controller' => 'personas', 'action' => 'index'));
		
				
    }
	
	
	//Metodo cursoOtorgado -> le entra de parametros la cedula del profesor, la sigla del curso a buscar, y la cantidad maxima de ese mismo curso que puede tener (en el caso actual es 1 pero es mejor dejar el metodo lo mas general posible)
	
	public function cursoOtorgado($cedula ,$curso, $limite) { 
				
		$cursos = $this->Imparte->find('count', array('conditions' => array('Imparte.cedula_prof' => $cedula , 'Imparte.cod_curso' => $curso))); 
		
        return $cursos < $limite; //si el numero de cursos es menor al limite entonces devuelve verdadero
    }
		
		
	//Metodo encargado de de elegir el curso a borrar 
	
		    public function borrarcurso() {
				
				$cedula = $this->passedArgs['cedula'];
				
				$cursos = $this->Imparte->find('list', array('conditions' => array('Imparte.cedula_prof' => $cedula),'fields' => array('cod_curso','cod_curso')));	//genera una lista de todos los cursos que imparte el profesor actual	
				
				$this->set('lista_cursos', $cursos );//se envia la variable al view
		
			 if ($this->request->is('post')) {
		  
				
                
				$sigla = $this->data['Imparte']['cod_curso'];  //guarda el valor recibido
			
				
				$this->Session->setFlash(__('El curso a sido borrado al profesor.'));

				return $this->redirect( array('action' => 'borrar', 'sigla' => $sigla, 'cedula'=>$cedula ,'confirm'=>'Seguro de borrar el curso?')); //redirecciona al metodo encargado de borrar
			 }

        }
	
//metodo encargado de borrar un curso	
public function borrar() {
			  		
        $sig = $this->passedArgs['sigla'];
	    $ced = $this->passedArgs['cedula'];	 
			 
		$curso_elegido = $this->Imparte->find('first', array('conditions' => array('Imparte.cod_curso' => $sig , 'Imparte.cedula_prof' => $ced))); //se busca el curso que cumple con las condiciones elgidas anteriormente
		
		$aux = $curso_elegido['Imparte']['id']; //se guarda el id del curso elegido a elminar
		
		if ($this->Imparte->delete($aux)) { //se elimina la tupla de imparte que contiene al curso
        $this->Session->setFlash(
            __('El curso de siglas %s ha sido eliminado.', h($sig))
        );
    } else {
        $this->Session->setFlash(
           __('El curso de siglas %s no se ha podido eliminar.', h($sig))
        );
    }

			 return $this->redirect(array('controller' => 'personas', 'action' => 'index'));
		 }
 
	
	    public function vista() { //metodo encargado de mostrar todos los cursos que puede dar un profesor especifico
       
	   			$cedula = $this->passedArgs['cedula'];
	   
	   if (!$cedula) {
            $this->Session->setFlash(__('El profesor no tiene cursos asignados.', h($sig)));
			return $this->redirect(array('controller' => 'personas', 'action' => 'index'));
       }
           $prof = $this->Imparte->findBycedula_prof($cedula);
           $cursos = $this->Imparte->find('all', array(
        'conditions' => array('Imparte.cedula_prof' => $cedula)
		));
		
		    $allArticles = $this->Imparte->find('all');
			$pending = $this->Imparte->find('all', array(
        'conditions' => array('Imparte.cedula_prof' => $cedula),
		'fields'=>array('cod_curso')
    ));
		
		
       if (!$cursos) {
            $this->Session->setFlash(__('El profesor no tiene cursos asignados.', h($sig)));
			return $this->redirect(array('controller' => 'personas', 'action' => 'index'));
       }
	 
		
	    $this->set('pending', $pending );
        $this->set('cursos', $cursos );
		$this->set('prof', $prof);
    }

}