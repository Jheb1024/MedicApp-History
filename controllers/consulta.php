<?php
//require_once 'models/administrarPaciente.php';
class Consulta extends Controller{

    function __construct(){

        parent::__construct();
        session_start();
        if(isset($_SESSION['user'])){
            $this->view->render('consulta/index');
            /*$administrarPaciente = new AdministrarPaciente();
            
            date_default_timezone_set("America/Mexico_City");
            
            if (isset($_POST['consulta'])){
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
            }*/
        }else{
            header('Location: main');
        }
        //echo"<p> error al cargar recurso</p>";
    }
}
?>