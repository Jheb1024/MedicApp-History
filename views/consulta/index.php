<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php require 'views/header.php' ?>
    <h1 class="center">Consulta Médica</h1>
    <br>
    <h3>Datos de la consulta</h3>
    <div id="consulta">
        <form style="display: grid, grid-template-columns: 1fr 1fr,
  grid-gap: 20px" action="" method="post">
        <div style="text-align: left" id="datos-patologicos">
            <ul >
                <li>
                    <label for="user_name">Fecha:</label>
                    <input type="date" id="fecha-consulta" name="fecha-consulta">
                </li>
                <li>
                    <label for="sintomas">Síntomas:</label>
                    <textarea name="textarea" rows="5" cols="50">Fiebre alta...</textarea>
                </li>
                <li>
                    <label for="enfermedad">Enfermedad:</label>
                    <textarea name="textarea" rows="2" cols="50">...</textarea>
                </li>
                <li>
                    <label for="medicacion">Medicación:</label>
                    <textarea name="textarea" rows="4" cols="50">...</textarea>
                </li>
            </ul>
        </div>
        <div style="text-align: right" id="datos-fisicos">
            <ul >
                <li>
                    <label for="user_name">Presión arterial:</label>
                    <input type="text" id="presion-arterial" name="presion-arterial">
                </li>
                <li>
                    <label for="user_name">Peso:</label>
                    <input type="text" id="peso" name="peso">
                </li>
                <li>
                    <label for="user_name">Altura:</label>
                    <input type="text" id="altura" name="altura">
                </li>
            </ul>
        </div>    
        <button type="submit">Guardar</button>
        </form>
    </div>
    <?php require 'views/footer.php' ?>
</body>
</html>