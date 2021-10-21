<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <!-- Bulma CSS -->
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
<main>
    <div class="columns has-text-centered">
        <div class="column">
            <p class="title">
                Consulta Médica
            </p>
        </div>
    </div>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Datos de la consulta</label>
                </div>
                <div class="column is-two-thirds">

                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Fecha:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="date" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Síntomas:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="textarea" type="text" value="Tos, Garganta irritada." style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Diagnóstico:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="text" value="Gripe Común" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Medicación:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="text" value="Zanamivir y Oseltamivir" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Presión Arterial:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="text" value="120/80"style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Temperatura (C°):</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="text" value="37.8" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Altura (m):</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="number" value="1.71"style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Peso (kg):</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="number" value="70"style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">

                </div>
                <div class="column is-two-thirds has-text-centered">
                    <a class="button is-primary">
                        <strong>Guardar</strong>
                    </a>
                </div>
            </div>
</main>
<footer class="footer">
    <label class="label has-text-right">&#169 MedicApp 2021</label>
</footer>
</body>
</html>