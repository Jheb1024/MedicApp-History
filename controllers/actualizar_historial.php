<?php
$mysqli = new mysqli("localhost", "root", "", "doctores");

$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$no_seguro_social = $_POST['no_seguro_social'];

$sql = "UPDATE paciente SET nombre = '".$nombre."', app = '".$app."', apm = '".$apm."', altura = ".$altura.", peso = ".$peso.
    ", no_seguro_social = ".$no_seguro_social." WHERE id_paciente = ". $_POST['id'];

echo mysqli_query($mysqli,$sql);
$mysqli->close();