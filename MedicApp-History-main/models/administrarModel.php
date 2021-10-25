<?php

abstract class administrarModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos){

        $query = $this->db->connect()->prepare('insert into paciente (nombre, app, apm, altura, edad, FechaNacimiento, peso, no_seguro_social) values (:nombre, :app, :apm, :altura, :edad, :FechaNacimiento, :peso, :no_seguro_social)');


        $query->execute(['nombre' => $datos['nombre'], 'app' => $datos['app'], 'apm' => $datos['apm'], 'altura' => $datos['altura'], 'edad' => $datos ['edad'], 'FechaNacimiento' => $datos['FechaNacimiento'], 'peso' => $datos['peso'], 'no_seguro_social' => $datos['no_seguro_social']]);

         //crear Historial medico

         $historial = $this->db->connect()->prepare('insert into historialmedico (nombre_paciente) values (:nombre)');
         $historial->execute(['nombre' => $datos['nombre']]);
 
         $historialid = $this->db->connect()->prepare('update historialmedico set id_paciente = id where nombre_paciente = :nombre');
         $historialid->execute(['nombre' => $datos['nombre']]);
 
        //actualizar id del historial
 
         $actuid = $this->db->connect()->prepare('update paciente set id_historial = id_paciente where nombre = :nombre');
         $actuid->execute(['nombre' => $datos['nombre'],]);

    }
}




?>