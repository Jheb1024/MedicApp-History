<?php

require_once 'administrarModel.php';

class agregar_pacienteModel extends administrarModel{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        $this->insert($datos);
       
    }
}




?>