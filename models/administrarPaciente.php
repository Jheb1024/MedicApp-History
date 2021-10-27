<?php
require_once 'C:/xampp/htdocs/MedicApp-History/config/DB.php';
require_once 'C:/xampp/htdocs/MedicApp-History/models/administrar.php';

    class AdministrarPaciente extends Administrar{
        
        function __construct(){
            parent::__construct();
        }
        

        public function actualizarPaciente(){

        }

        public function actualizarHistorial(){

        }

        public function crearConsultaPaciente($idPaciente,$enfermedad,$sintomas,$fecha,$medicacion, $nombrePaciente,
        $presionArterial,$temperatura,$coste){

            $database = Database::Instancia();
            $conexion = $database->connect();
            $query = $conexion->prepare('INSERT INTO consulta(id_paciente, enfermedad, sintomas, 
            fechaLlegada, medicacion, nombre_paciente, presion_arterial, temperatura, coste)
            values(?,?,?,?,?,?,?,?,?)');
            $query->execute([$idPaciente,$enfermedad,$sintomas,$fecha,$medicacion, $nombrePaciente,
            $presionArterial,$temperatura,$coste]);

            if($query->rowCount()>0){
                echo 'Consulta guardada';
            }else{
                echo'Hubo un problema al guardar la consulta';
            }
        }


    }

?>