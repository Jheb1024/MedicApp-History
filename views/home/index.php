<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
                    <a class="button is-primary" href="index.php">
                        <strong>Inicio</strong>
                    </a>
                    <a class="button is-light" href="../buscar_paciente/index.php">
                        Buscar Paciente
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
    <h1>Bienvenido Médico</h1>
    <a class="button is-primary" href="../consulta/index.php">
        Consultar
    </a>
</main>
<footer class="footer">
    <label class="label has-text-right">&#169 MedicApp 2021</label>
</footer>
</body>
</html>