<?php

class Buscar_Paciente extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('buscar_paciente/index');
    }
}

?>