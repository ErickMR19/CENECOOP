<?php
App::uses('AppController', 'Controller');

class MatriculaTempsController extends AppController {

    public function index() {

        if (!$this->PeriodoActivo()) {
            $this->render('sin_periodo_matricula');
        }

        $this->set('matriculatemps', $this->MatriculaTemp->find('all'));
    }

	public function add() {

            //Verifica el periodo
            if (!$this->PeriodoActivo()) {
                return $this->redirect(array('action' => 'index'));
            }

            $usuario = $this->Auth->user();
		    $cedula = $usuario['cedula'];

		    // Busca los cursos que el estudiante no ha aprobado ni pre-matriculado
		    $cursos = $this->MatriculaTemp->query('SELECT DISTINCT id, nombre_cur
                                             FROM cursos
                                             WHERE id NOT IN (
                                                 SELECT c.id
                                                 FROM cursos c, matriculas m
	                                             WHERE m.cedula_est = cedula_est AND c.id = m.cod_curso AND m.nota_final>7)
                                             AND id NOT IN (
                                                 SELECT m.cod_curso
                                                 FROM matricula_temp m
                                                 WHERE m.cedula_est = '.$cedula.')'
                                            );


            $this->set('cursos', $cursos); // Carga los cursos en la vista


		    // Busca los cursos pre-matriculados por el estudiante
		    $cursosPre = $this->MatriculaTemp->query('SELECT DISTINCT c.id, c.nombre_cur
                                                  FROM cursos c, matricula_temp m
                                                  WHERE  m.cedula_est = '.$cedula.' AND c.id = m.cod_curso
                                                 ');

		    $this->set('cursosPre', $cursosPre); // Carga los cursos pre-matriculados en la vista

    }


	// Matricula un curso
    public function matricular( $cod_curso ) {

        //Verifica el periodo
        if (!$this->PeriodoActivo()) {
            return $this->redirect(array('action' => 'index'));
        }

		if ( $this->request->is(array('post', 'put')) ) {

			$this->MatriculaTemp->create();

			$usuario = $this->Auth->user();
			$cedula = $usuario['cedula'];

			$this->MatriculaTemp->data['MatriculaTemp']['cedula_est'] = $cedula;
			$this->MatriculaTemp->data['MatriculaTemp']['cod_curso'] = $cod_curso;

			$contMatriculas = $this->Matriculado($cedula);

			if($contMatriculas){

            	if ($this->MatriculaTemp->save($this->request->data)) {
                	$this->Session->setFlash(__('Curso pre-matriculado.'));
                	return $this->redirect(array('action' => 'add'));
            	}
				else{
					$this->Session->setFlash(__('Imposible pre-matricular curso.'));
				}
			}
			else {
				$this->Session->setFlash(__('Ya pre-matriculo dos cursos.'));
				return $this->redirect(array('action' => 'add'));
			}
		}
    }


    // Borra una pre-matricula
    public function borrarMatricula( $cod_curso ) {

        //Verifica el periodo
        if (!$this->PeriodoActivo()) {
            return $this->redirect(array('action' => 'index'));
        }

        $usuario = $this->Auth->user();
        $cedula = $usuario['cedula'];

        if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ( $this->MatriculaTemp->deleteAll( ['cod_curso' => $cod_curso, 'cedula_est' => $cedula], false ) ) {
			$this->Session->setFlash(__('Pre-matricula borrada.'));
		}
		else {
			$this->Session->setFlash(__('La pre-matricula no se ha podido borrar'));
		}

		return $this->redirect(array('action' => 'add'));
    }


	// Verifica la cantidad de cursos pre-matriculados
	public function Matriculado($cedula) {

        $contador = $this->MatriculaTemp->find('count', array('conditions' => array('MatriculaTemp.cedula_est' => $cedula)));

        return $contador < 2; //si el numero de cursos es menor al limite entonces devuelve verdadero
    }


    public function PeriodoActivo(){
         date_default_timezone_set('America/Costa_Rica');
         $date = date('Y-m-d');

         $periodoActual = ClassRegistry::init('Periodos')->find('all', array('limit' => 1, 'order' => array('inicio_matricula DESC'), 'limit' => 1, 'fields' => array('inicio_matricula', 'fin_matricula')));
         $inicioMatricula = $periodoActual[0]['Periodos']['inicio_matricula'];
         $finMatricula = $periodoActual[0]['Periodos']['fin_matricula'];

         return ($inicioMatricula <= $date and $date <= $finMatricula);
    }

}
