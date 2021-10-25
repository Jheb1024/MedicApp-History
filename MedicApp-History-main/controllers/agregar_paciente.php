<?php

class agregar_paciente extends Controller
{

    function __construct(){
        parent::__construct();
        $this->view->render('agregar_paciente/index');
    }

    public function crearp(){
        $nombre = $_POST['nombre'];
        $apellidop = $_POST['app'];
        $apellidom = $_POST['apm'];
        $altura = $_POST['altura'];
        $edad = $_POST['edad'];
        $fechana = $_POST['FechaNacimiento'];
        $peso = $_POST['peso'];
        $seguros = $_POST['no_seguro_social'];

        $this->model->insert(['nombre' => $nombre, 'app' => $apellidop, 'apm' => $apellidom, 'altura' => $altura, 'edad' => $edad, 'FechaNacimiento' => $fechana, 'peso' => $peso, 'no_seguro_social' => $seguros]);
}

}

