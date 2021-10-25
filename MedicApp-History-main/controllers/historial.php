<?php
class Historial extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->render('historial/index'); 
        //echo"<p> error al cargar recurso</p>";
    }
}
?>