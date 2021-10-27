<?php
class Detalles_Consulta extends Controller{

    function __construct(){
        parent::__construct();

        session_start();
        if(isset($_SESSION['user'])){
            $this->view->render('detalles_consulta/index'); 
        }else{
            header('Location: main');
        }
        //echo"<p> error al cargar recurso</p>";
    }
}
?>