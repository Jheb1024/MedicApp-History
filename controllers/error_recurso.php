<?php
class ErrorRecurso extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->render('error_recurso/index');
        //echo"<p> error al cargar recurso</p>";
    }
}
?>