<?php
class Historial extends Controller{

    function __construct(){

        session_start();
        if(isset($_SESSION['user'])){
            $this->view->render('historial/index'); 
        }else{
            header('Location: main');
        }
        //echo"<p> error al cargar recurso</p>";
    }
}
?>