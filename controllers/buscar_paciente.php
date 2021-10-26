<?php

class Buscar_Paciente extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
        if(isset($_SESSION['user'])){
            $this->view->render('buscar_paciente/index'); 
        }else{
            header('Location: main');
        }
    }
}

?>