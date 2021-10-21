<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agregar Paciente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <a class="button is-light" href="../buscar_paciente/index.php">
                        Buscar Paciente
                    </a>
                    <a class="button is-primary" href="index.php">
                        <strong>Agregar Paciente</strong>
                    </a>
                    <a class="button is-light">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<br><br>
<main class="has-text-centered has-text-primary">
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="columns is-vcentered">
                <div class="column is-one-third">
                    <label class="label">Nombre:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="text" placeholder="Juan Perez" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third">
                    <label class="label">Altura:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="number" placeholder="1.71" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third">
                    <label class="label">Peso (Kg):</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="number" placeholder="70" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third">
                    <label class="label">No. Seguro Social:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="number" placeholder="1234567890" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third">
                    <label class="label">Fecha Nacimiento:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="date" style="text-align: center">
                </div>
            </div>
            <div class="container">
                <a class="button is-primary">
                    <strong>Agregar</strong>
                </a>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <label class="label has-text-right">&#169 MedicApp 2021</label>
</footer>
</body>
</html>