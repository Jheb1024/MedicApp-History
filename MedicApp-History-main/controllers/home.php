<?php

class Home extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('home/index'); 
        //echo "<p>Nuevo controlador main</p>";   
    }
}

?>