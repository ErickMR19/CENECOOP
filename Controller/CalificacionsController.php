<?php
App::uses('AppController', 'Controller');

class CalificacionsController extends AppController {

    // REVISAR
    // Se debe limpiar la tabla imparte después de cada periodo
    public function indexCursosProf() {

        // Cedula del usuario/profesor
        $usuario = $this->Auth->user();
        $cedula = $usuario['cedula'];

        // Selecciona todos los cursos que imparte el profesor
        $cursos = $this->Calificacion->query('SELECT  c.id, c.nombre_cur
                                               FROM cursos c, imparte i
                                               WHERE c.id = i.cod_curso AND i.cedula_prof ='.$cedula
                                             );

        $this->set('cursos', $cursos);
    }


    public function indexCursosEst() {

        // Cedula del usuario/estudiante
        $usuario = $this->Auth->user();
        $cedula = $usuario['cedula'];

        // Busca el periodo actual
        $periodoActual = ClassRegistry::init('Periodos')->find('all', array('limit' => 1, 'order' => array('inicio DESC'), 'limit' => 1, 'fields' => array('id')));
        $idPeriodo = $periodoActual[0]['Periodos']['id'];

        // Selecciona todos los cursos que lleva el estudiante
        $cursos = $this->Calificacion->query('SELECT  m.id, g.CodCurso, g.NumGrupo
                                               FROM matriculas m, grupos g
                                               WHERE m.cedula_est = '.$cedula.' AND m.cod_grupo = g.id AND g.CodPeriodo = '.$idPeriodo
                                             );

        $this->set('cursos', $cursos);
    }



    public function indexGrupos( $codCurso ) {

        // Cedula del usuario/profesor
        $usuario = $this->Auth->user();
        $cedula = $usuario['cedula'];

        // Busca el periodo actual
        $periodoActual = ClassRegistry::init('Periodos')->find('all', array('limit' => 1, 'order' => array('inicio DESC'), 'limit' => 1, 'fields' => array('id')));
        $idPeriodo = $periodoActual[0]['Periodos']['id'];


        // Selecciona todos los grupos que imparte el profesor en el periodo actual
        $grupos = $this->Calificacion->query('SELECT  id, NumGrupo
                                               FROM grupos
                                               WHERE CodCurso = '.$codCurso.' AND Cedulaprof ='.$cedula.' AND CodPeriodo ='.$idPeriodo
                                             );

        $this->set('grupos', $grupos);
        $this->set('curso', $codCurso);
    }



    public function indexEstudiantes() {

        // Obtiene los parámetros enviados a la función
        $codCurso = $this->passedArgs['codCurso'];
        $idGrupo = $this->passedArgs['idGrupo'];

        // Selecciona todos estudiantes que pertenecen al grupo
        $estudiantes = $this->Calificacion->query('SELECT  p.id, p.nombre, p.apellido1, p.apellido2
                                               FROM matriculas m, personas p
                                               WHERE m.cedula_est = p.id AND m.cod_grupo = \''.$idGrupo.'\''
                                             );

        $this->set('curso', $codCurso);
        $this->set('grupo', $idGrupo);
        $this->set('estudiantes', $estudiantes);


    }

    // Vista de calificaciones para el profesor
    public function viewProf(){

        // Obtiene los parámetros enviados a la función
        $cedula_est = $this->passedArgs['ced'];
        $idGrupo = $this->passedArgs['grupo'];

        // Busca el nombre del estudiante para mostrarlo en la vista
        $this->loadModel('Persona');
        $estudiante = $this->Persona->find('all', array('conditions' => array('id' => $cedula_est), 'fields' => array('nombre', 'apellido1', 'apellido2')));
        $this->set('nombre', $estudiante[0]['Persona']['nombre']);
        $this->set('apellido1', $estudiante[0]['Persona']['apellido1']);
        $this->set('apellido2', $estudiante[0]['Persona']['apellido2']);



        // Busca el id de matricula correspondiente
        $this->loadModel('Matricula');
        $id = $this->Matricula->find('all', array('conditions' => array('cedula_est' => $cedula_est , 'cod_grupo' => $idGrupo), 'fields' => array('id')));
        $idMatricula = $id[0]['Matricula']['id'];

        // Busca las calificaciones correspondientes
        $calificaciones = ClassRegistry::init('Calificaciones')->find('all', array('conditions' => array('Calificaciones.id_matriculas' => $idMatricula ), 'order' => array('Calificaciones.semana ASC')));

        $this->set('calificaciones', $calificaciones);
        $this->set('idMatricula', $idMatricula);
    }



    // Vista de calificaciones para el estudiante
    public function indexCalificaciones( $idMatricula ) {

        // Busca las calificaciones correspondientes
        $calificaciones = ClassRegistry::init('Calificaciones')->find('all', array('conditions' => array('Calificaciones.id_matriculas' => $idMatricula ), 'order' => array('Calificaciones.semana ASC')));

        $this->set('calificaciones', $calificaciones);
    }


    // Agrega una calificacion en la tabla calificaciones
    public function add(){

        if ($this->request->is('post')) {//'put','get'

            $this->Calificacion->create();

            if ( $this->Calificacion->save( $this->request->data ) ) {
				$this->Session->setFlash(__('La calificación ha sido guardada.'));
                return $this->redirect($this->referer()); // Devuelve a la pagina anterior
            }
            else{
				$this->Session->setFlash(__('La calificación no pudo ser guardada.'));
                return $this->redirect($this->referer()); // Devuelve a la pagina anterior
			}
        }
    }


    // Elimina una calificacion
    public function borrar( $id ) {

		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Calificacion->delete( $id )) {
			$this->Session->setFlash(__('La calificación ha sido eliminado.'));
		}
		else {
			$this->Session->setFlash(__('La calificación no se ha podido eliminar.'));
		}

		return $this->redirect($this->referer()); // Devuelve a la pagina anterior
	}


}
