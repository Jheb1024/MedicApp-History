<?php
require_once 'libs/user_session.php';
class Main extends Controller{
    public $error_login = '';
    function __construct(){
        parent::__construct();
        
        //echo "<p>Nuevo controlador main</p>";
        session_start();
        if(isset($_SESSION['user'])){
            
            echo 'Ya hay sessión';
            header("Location: home");

        }else{
            if(isset($_POST['user_name']) && !empty($_POST['user_name']) && isset($_POST['password']) && !empty($_POST['password'])){
            //determinar si son los datos correctos antes de iniciar sesion
                $userName = $_POST['user_name'];
                $userPassword = $_POST['password'];
                $userSession = new UserSession();
                   
                    if($userSession->userExists($userName,$userPassword)){
                        session_start();
                        //echo $_POST['user_name'];
                        $_SESSION['user']=$userName;
                        header("Location: home");
                        
                    }else{
                        $this->error_login = 'Usuario y/o contraseña no válidos';
                        header("Location: main");
                        //$this->view->render('main/index'); 
                        //include_once 'main';
                    }
            }else{
                $this->view->render('main/index'); 
            }
        } 
    }
}

?>