<?php

App::uses('AppHelper', 'View/Helper');

class AutenticacionHelper extends AppHelper {
    public $helpers = array('Session');

    public function checkAdmin() {
        return   ( ($this->Session->read('Auth.User.rol') == 'Administrador') ? true : false) ;
    }
}
