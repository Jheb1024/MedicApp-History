<?php
require_once ('C:/xampp/htdocs/MedicApp-History/models/administrarPaciente.php');
header("Content-Type: text/plain");
ini_set('display_errors', 1);
error_reporting(E_ALL);

            session_start();
            
            $administrarPaciente = new AdministrarPaciente();
            date_default_timezone_set("America/Mexico_City");
            
            
                $idPaciente = 1;
                $nombrePaciente = 'Ileana';
                $fecha_consulta = date('Y-m-d H:i:s');
                $sintomas       = $_POST['sintomas'];
                $medicacion    = $_POST['medicacion'];
                $presionArterial     = $_POST['presion_arterial'];
                $enfermedad     = $_POST['enfermedad'];
                $temperatura     = $_POST['temperatura'];
                $coste = $_POST['coste'];
            
                $administrarPaciente->crearConsultaPaciente($idPaciente,$enfermedad,$sintomas,$fecha_consulta,
                $medicacion, $nombrePaciente,$presionArterial,$temperatura,$coste);
                echo $idPaciente;
            
            

?>