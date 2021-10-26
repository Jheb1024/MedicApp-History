<?php

$mysqli = new mysqli("localhost", "root", "", "doctores");

$salida = "";
$query = "SELECT id, fechaLlegada, enfermedad FROM consulta WHERE id_paciente = ".$_POST['id']." ORDER BY fechaLlegada";

$resultado = $mysqli->query($query);

if ($resultado->num_rows > 0) {
    $salida .= "
         <table class='table' style='margin-left: auto; margin-right: auto;'>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Diagnóstico</th>
                </tr>
            </thead>
            <tbody>
        ";

    while ($fila = $resultado->fetch_assoc()) {
        $salida .= "
                <tr>
                    <th>" . $fila['fechaLlegada'] . "</th>
                    <th><a href='../historial/index.php?id=".$fila['id']."'>" . $fila['enfermedad'] . "</a></th>
                </tr>           //El link de aquí es el que debes cambiar para la redirección
            ";
    }

    $salida .= "
            </tbody>
            </table>
        ";
} else {
    $salida .= "No se encontraron consultas anteriores en los registros.";
}

echo $salida;
$mysqli->close();