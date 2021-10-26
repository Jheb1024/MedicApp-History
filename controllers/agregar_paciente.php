<?php
class Agregar_paciente extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        if(isset($_SESSION['user'])){
            $this->view->render('agregar_paciente/index'); 
        }else{
            header('Location: main');
        }
    }
    public function registrar ()
    {
        
    }
}
?>