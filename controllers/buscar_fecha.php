<?php
$mysqli = new mysqli("localhost", "root", "", "doctores");

$salida = "";
$query = "SELECT id_paciente, nombre FROM paciente ORDER BY nombre";

if (isset($_POST['consulta'])) {
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT paciente.id_paciente, paciente.nombre FROM paciente INNER JOIN consulta ON paciente.id_paciente 
            = consulta.id_paciente WHERE consulta.fechaLlegada = '" . $q . "' ORDER BY nombre;";
}

$resultado = $mysqli->query($query);

if ($resultado->num_rows > 0) {
    $salida .= "
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
        $salida .= "
                <tr>
                    <th>" . $fila['id_paciente'] . "</th>
                    <th><a href='../historial/index.php'>" . $fila['nombre'] . "</a></th>
                </tr>
            ";
    }

    $salida .= "
            </tbody>
            </table>
        ";
} else {
    $salida .= "No se encontraron resultados";
}

echo $salida;
$mysqli->close();

?>