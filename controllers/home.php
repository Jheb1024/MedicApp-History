<?php
require_once 'libs/user_session.php';
class Home extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
        if(isset($_SESSION['user'])){
            $this->view->render('home/index'); 
        }else{
            header('Location: main');
        }
        
        //echo "<p>Nuevo controlador main</p>";   
    }
}

?>