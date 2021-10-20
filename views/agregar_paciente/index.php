<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Resource/agregar.css" rel="stylesheet">
    <title>MedicAPP</title>
</head>
<body>
<?php require 'views/header.php' ?>
    <h2> Agregar nuevo paciente</h2> <br>
<form method="post" enctype="multiplart/form-data">
    <div id="campos">
<p>Nombre del paciente: <input type= "text" name= "nombrep" size = "40"></p>
<p>Apellido paterno: <input type= "text" name= "app" size = "40"></p>
<p>Apellido materno: <input type= "text" name= "apm" size = "40"></p>
<p>Fecha de Nacimiento: <input type= "date" name= "fecha" size = "40"></p>
<p>Edad: <input type= "number" name= "edad" size = "40"></p>
<p>Altura: <input type="number" step="any" name= "alturap" size = "40"></p>
<p>Peso: <input type="number" step="any" name= "pesop" size = "40"></p>
<p>No. Seguro Social: <input type= "text" name= "seguro" size = "40"></p>
</div>

<div class="botones">
<input type="submit" id="guardar" value="Guardar" name="registro"> 
<input type="reset" id="borrar" value="Borrar"> 

</form>
<?php require 'views/footer.php' ?>
</body>
</html>