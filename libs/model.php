<?php

require_once 'C:/xampp/htdocs/MedicApp-History/config/DB.php';

class Model{
    function __construct(){
        $this->db = Database::Instancia();
    }
}

?>