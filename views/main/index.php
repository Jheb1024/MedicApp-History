<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedicAPP</title>
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
                    <a class="button is-light">
                        Ayuda
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
                Bienvenido a MedicApp la aplicación web de los médicos
            </p>
        </div>
    </div>
    <br><br>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">ID:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="number" value="1560" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third has-text-left">
                    <label class="label">Contraseña:</label>
                </div>
                <div class="column is-two-thirds">
                    <input class="input" type="password" value="pass123" style="text-align: center">
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-one-third">

                </div>
                <div class="column is-two-thirds has-text-centered">
                    <a class="button is-primary" href="../home/index.php">
                        <strong>Iniciar Sesión</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <label class="label has-text-right">&#169 MedicApp 2021</label>
</footer>
</body>
</html>