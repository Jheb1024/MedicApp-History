<?php
class Database{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    private static $instancia = null;

    public function __construct(){
        $this->host = 'localhost';
        $this->db = 'doctores';
        $this->user = 'root';
        $this->password = '';
        $this->charset = 'CHARSET';
    }

    public static function Instancia(){
        if(!isset(Database::$instancia)){
            Database::$instancia = new Database();
        }
        return Database::$instancia;
    }

    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            //$options
            $pdo = new PDO("mysql:host=localhost;dbname=doctores","root","");
            //$pdo = new PDO("mysql:host=www.db4free.net;dbname=doctores1","doctoresbdweb1","doctores123");
            echo error_log('Conexión a BD exitosa');
            return $pdo;
            
        }catch(PDOException $e){
            echo 'falló la conexión'; 
            error_log('Error connection: ' . $e->getMessage());
        }
    }

}



?>