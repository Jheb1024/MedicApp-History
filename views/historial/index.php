<?php
$mysqli = new mysqli("localhost", "root", "", "doctores");

$salida = "";
$query = "SELECT * FROM paciente WHERE id_paciente = ".$_GET['id'];
$resultado = $mysqli->query($query);
$fila = $resultado->fetch_assoc()
?>
<!doctype html>
<html lang="en">
<head>
    <title>Historial Médico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bulma Styles -->
    <link rel="stylesheet" href="../../bulma/css/bulma.css">
</head>
<body>
<nav class="navbar is-light" role="navigation" aria-label="main-navigation">
    <div class="navbar-brand" style="padding-left: 20px; padding-top: 10px; padding-bottom: 10px;">
        <img src="../../public/img/logo%20sin%20fondo.png" alt="MedicAPP logo" width="160" height="70">
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu">

        <div class="navbar-start">
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-light" href="../home/index.php">
                        Inicio
                    </a>
                    <a class="button is-primary" href="../buscar_paciente/index.php">
                        <strong>Buscar Paciente</strong>
                    </a>
                    <a class="button is-light" href="../agregar_paciente/index.php">
                        Agregar Paciente
                    </a>
                    <a class="button is-light">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<br>
<main class="has-text-centered has-text-primary">
    <div class="columns is-centered">
        <div class="column">
            <p class="title">
                Historial Médico
            </p>
        </div>
    </div>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Datos del Paciente</label>
                </div>
                <div class="column is-two-thirds">

                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Nombre:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" id="name" type="text" value="<?php echo $fila['nombre']." ".$fila['app']." ".$fila['apm']?>" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">No. Paciente:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" readonly id="no_paciente" type="text" value="<?php echo $fila['id_paciente']?>" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Edad:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" readonly id="edad" type="text" value="<?php echo $fila['edad']?>" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Altura:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="number" id="altura" value="<?php echo $fila['altura']?>" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Peso (Kg):</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="number" id="peso" value="<?php echo $fila['peso']?>"style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">No. Seguro Social:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="number" id="no_seguro" value="<?php echo $fila['no_seguro_social']?>" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Fecha Nacimiento:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" readonly id="fecha_nacimiento" type="date" value="<?php echo $fila['FechaNacimiento']?>" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">

                </div>
                <div class="column is-two-thirds">
                    <a class="button is-primary" id="btn-actualizar">
                        <strong>Actualizar</strong>
                    </a>
                </div>
            </div>
            <br>
            <?php
                $query = "SELECT * FROM historialmedico WHERE id_paciente = ".$_GET['id'];
                $resultado = $mysqli->query($query);
                $fila = $resultado->fetch_assoc()
            ?>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Antecedentes:</label>
                </div>
                <div class="column is-two-thirds" id="antecedentes">
                    <label class="label"><?php echo $fila['antecedentes'] ?></label>
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Consultas:</label>
                </div>
                <div class="column is-two-thirds">
                    <a class="button is-primary" id="btn-ver-consultas">
                        <strong>Ver consultas</strong>
                    </a>
                    <a class="button is-primary" href="../consulta/index.php">
                        <strong>Nueva Consulta</strong>
                    </a>
                </div>
            </div>
            <br>
            <div class="columns is-centered">
                <div class="column is-one-third has-text-left">

                </div>
                <div class="column is-two-thirds" id="consultas">

                </div>
            </div>
        </div>
    </div>
</main>
<input type="text" style="visibility: hidden" id="id_paciente" value="<?php echo $_GET['id']?>">
<footer class="footer">
    <label class="label has-text-right">&#169 MedicApp 2021</label>
</footer>
<script src="../../libs/jquery-3.6.0.min.js"></script>
<script src="../../controllers/historial_ajax.js"></script>
</body>
</html>