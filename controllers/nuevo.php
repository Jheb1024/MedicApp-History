<?php

require_once ('C:/xampp/htdocs/MedicApp-History/models/administrar.php');

header("Content-Type: text/plain");

$aux = new Administrar();

    $nombre = $_POST['nombre'];
    $apellidop = $_POST['app'];
    $apellidom = $_POST['apm'];
    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $fechana = $_POST['FechaNacimiento'];
    $peso = $_POST['peso'];
    $seguros = $_POST['no_seguro_social'];
    
    $aux->insert($nombre, $apellidop, $apellidom, $altura, $edad, $fechana, $peso,$seguros);
    
    echo "registro exitoso";



?>