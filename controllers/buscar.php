<?php

    $mysqli = new mysqli("localhost", "root", "", "doctores");

    $salida = "";
    $query = "SELECT id_paciente, nombre FROM paciente ORDER BY nombre";

    if (isset($_POST['consulta'])) {
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query = "SELECT id_paciente, nombre FROM paciente WHERE nombre LIKE '%".$q."%' ORDER BY nombre";
    }

    $resultado = $mysqli->query($query);

    if ($resultado->num_rows > 0) {
        $salida.="
         <table class='table' style='margin-left: auto; margin-right: auto;'>
            <thead>
                <tr>
                    <th>Número de Paciente</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
        ";

        while ($fila = $resultado->fetch_assoc()) {
            $salida.= "
                <tr>
                    <th>".$fila['id_paciente']."</th>
                    <th>".$fila['nombre']."</th>
                </tr>
            ";
        }

        $salida.= "
            </tbody>
            </table>
        ";
    } else {
        $salida.= "No se encontraron resultados";
    }

    echo $salida;
    $mysqli->close();
?>