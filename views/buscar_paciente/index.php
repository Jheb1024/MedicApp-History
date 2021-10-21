<!DOCTYPE html>
<html lang="es">
<head>
    <title>Búsqueda</title>
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
                    <a class="button is-primary" href="index.php">
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
<br><br>
<main class="has-text-centered has-text-primary">
    <div class="columns is-centered">
        <div class="column">
            <p class="title is-3 is-bold">
                Buscar Paciente
            </p>
        </div>
        <div class="column">
            <label>
                <input class="input" type="text" placeholder="">
            </label>
        </div>
        <div class="column">
            <div class="select is-primary">
                <label>
                    <select>
                        <option>Buscar por nombre</option>
                        <option>Buscar por fecha</option>
                    </select>
                </label>
            </div>
        </div>
    </div>
    <div class="columns is-centered">
        <div class="column">
            <table class="table" style="margin-left: auto; margin-right: auto;">
                <thead>
                <tr>
                    <th>Número de Paciente</th>
                    <th>Nombre</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <th>Jesús Alexis Ramírez Navor</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Jhon Gómez Agustin</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Alma Ileana Rivera Hernandez</th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<footer class="footer">
    <label class="label has-text-right">&#169 MedicApp 2021</label>
</footer>
</body>
</html>