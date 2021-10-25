<?php
class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('agregar_paciente/index');
    }

    function crearp(){
        echo "Wtf";
        $this->model->insert();
        
    }
}


?>