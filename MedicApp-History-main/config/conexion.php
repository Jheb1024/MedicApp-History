<?php

session_start();
class conectar {
    protected $bd;

    protected function conexion(){
        try{
            $conectar = $this->bd = new PDO("mysql:local=localhost;dbname=doctores","root","");
            
            return $conectar;
            print "conexion exitosa";
        }catch (Exception $e){
            print "No se pudo conectar a la base de datos" . $e->getMessage() . "<br/>";
            die();
        }

    }

    public function set_name(){
        return $this->bd->query("SET NAME 'utf8'");
    }

    public function ruta()
    {
        return "http://localhost:8080/Proyecto/MedicAPP/";
    }

}



?>