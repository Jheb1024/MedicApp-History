<?php
require_once 'config/db.php';
class UserSession{

    public function __construct(){
        
    }

    public function startSession(){
        session_start();
    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){

        return $_SESSION['user'];
    }

    public function userExists($userName, $userPassword){
        $dataBase = Database::Instancia();
        $conexion=$dataBase->connect();

        $query=$conexion->prepare("SELECT id_medico, password FROM medico WHERE id_medico = ? AND password= ? ");
        $query->bindParam(1,$userName, PDO::PARAM_INT);
        $query->bindParam(2,$userPassword, PDO::PARAM_STR, 12);
        
        if($query->execute()){
            if($query->rowCount() ==0){
                return false;
            }else{
                return true;
            }
        }
    }

    public function closeSession(){

        session_unset();
        session_destroy();
    }
}

?>