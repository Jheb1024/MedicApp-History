<?php

require_once ('D:/xampp/htdocs/Proyecto/MedicApp-History-main/libs/database.php');

class Model{
    function __construct(){
        $this->db = new Database();
    }
}

?>