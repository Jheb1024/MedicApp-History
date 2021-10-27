<?php

require_once 'models/administrarModel.php';

class agregar_paciente extends Controller
{

    function __construct(){
        parent::__construct();
        

        session_start();

        $aux = new administrarModel();
            $this->view->render('agregar_paciente/index');

            /*
                    $nombre = $_POST['nombre'];
                    $apellidop = $_POST['app'];
                    $apellidom = $_POST['apm'];
                    $altura = $_POST['altura'];
                    $edad = $_POST['edad'];
                    $fechana = $_POST['FechaNacimiento'];
                    $peso = $_POST['peso'];
                    $seguros = $_POST['no_seguro_social'];
            
                    $aux->insert($nombre, $apellidop, $apellidom, $altura, $edad, $fechana, $peso,$seguros);*/
                
            }

        }

