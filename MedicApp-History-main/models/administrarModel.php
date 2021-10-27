<?php

require_once ('D:/xampp/htdocs/Proyecto/MedicApp-History-main/libs/model.php');


class administrarModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($nombre, $apellidop, $apellidom, $altura, $edad, $fechana, $peso,$seguros){

        $instancia = new Database();

        $query = $instancia->connect();

        $query1 = $query->prepare('insert into paciente (nombre, app, apm, altura, edad, FechaNacimiento, peso, no_seguro_social) values (?,?,?,?,?,?,?,?)');


        $query1->execute([$nombre, $apellidop, $apellidom, $altura, $edad, $fechana, $peso,$seguros]);

        //crear Historial medico

         $query2= $query->prepare('insert into historialmedico (nombre_paciente) values (?)');

         $query2->execute([$nombre]);
 
         
         $query3 = $query->prepare('update historialmedico set id_paciente = id where nombre_paciente = ?');

         $query3->execute([$nombre]);
 
        //actualizar id del historial
         
         $query4 = $query->prepare('update paciente set id_historial = id_paciente where nombre = ?');

         $query4->execute([$nombre]);
    }
}




?>