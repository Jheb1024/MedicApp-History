<?php
require_once 'libs/user_session.php';
class Logout extends Controller{
    function __construct(){
        parent::__construct();

        session_start();
        session_unset();
        session_destroy();
        header("Location: main");
        //$this->view->render('main/index'); 
        //echo "<p>Nuevo controlador main</p>";
    }
}

?>