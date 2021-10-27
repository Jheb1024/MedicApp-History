<?php

require_once 'administrar.php';

class agregar_pacienteModel extends Administrar{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        $this->insert($datos);
       
    }
}



?>