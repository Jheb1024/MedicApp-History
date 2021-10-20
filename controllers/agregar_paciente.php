<?php
class Agregar_paciente extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render("agregar_paciente/index");
    }
    public function registrar ()
    {
        
    }
}





/*




require_once ("../config/conexion.php");
require_once ("../Models/Agregar_paciente.php");
require_once ("../Views/agregar_paciente.php");

$auxiliar = new Agregar();

if(isset($_POST['registro']))
{
    $auxiliar->insertar_paciente($_POST["p_nom"], $_POST["p_app"], $_POST["p_apm"], $_POST["p_altura"], $_POST["p_edad"], $_POST, $_POST["p_FN"], $_POST["p_peso"], $_POST["p_seguro"]);
}

*/
?>