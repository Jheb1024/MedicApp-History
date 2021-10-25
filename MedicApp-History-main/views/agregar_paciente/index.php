<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery.js"> </script>
    <script src="ajax.js" language="JavaScript"></script>
    <title>MedicAPP</title>
    
</head>
<body>
<?php require 'views/home/navbar.php' ?>
    <h2> Agregar nuevo paciente</h2> <br>

    <div id="main">

    <form action="<?php echo constant('URL'); ?>agregar_paciente/crearp" method="POST" id= "formulario">

<p>
    <label for="nombre"> Nombre del paciente: </label> <br>
    <input type= "text" name= "nombre" size = "40" required>
</p>
<p>
    <label for="app">Apellido paterno:</label> <br> 
    <input type= "text" name= "app" size = "40" required>
</p>
<p>
    <label for="apm">Apellido materno:</label> <br> 
<input type= "text" name= "apm" size = "40" required>
</p>
<p>
    <label for="altura">Altura:</label> <br> 
<input type="number" step="any" name= "altura" size = "40" required>
</p>
<p>
   <label for="edad"> Edad: </label> <br> 
<input type= "number" name= "edad" size = "40" required>
</p>
<p>
    <label for="FechaNacimiento">Fecha de Nacimiento:</label> <br> 
    <input type= "date" name= "FechaNacimiento" size = "40" required>
</p>
<p>
    <label for="peso">Peso: </label> <br> 
    <input type="number" step="any" name= "peso" size = "40" required>
</p>
<p>
    <label for="no_seguro_social">No. Seguro Social:</label> <br> 
    <input type= "text" name= "no_seguro_social" size = "40" required>
</p>

<button id= "guardar" onclick="enviar()"> Guardar </button>
<input type="reset" id="borrar" value="Borrar"> 


<div id="mensaje"></div>
    <span id="load"></span>


</form>
</div>

<script type="text/javascript">

var resultado = document.getElementById("mensaje");

function enviar(){

    var nombre= document.getElementId("nombre").value;
    var apellidop = document.getElementId("app").value;

    var datos = "nombre="+nombre+"&app="+apellidop;

    var xmlhttp = new XMLHttpRequest();
        

    xmlhttp.onreadystatechange = function()
    {
        if(xmlhttp.readyState == 4 $$ xmlhttp.status == 200){
           document.getElementById("mensaje").innerHTML = xmlhttp.responseText;
        }
    };

    xmlhttp.open("POST", "alerta.php", true);
    xmlhttp.setRequestHeader("Content-type", "aplication/x-xww-form-url4ncode");
    xmlhttp.send(datos);
}

function XMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}

/*    $('#guardar').click(function(){

        var nombre = document.getElementById('nombre').value;
        var app = document.getElementById('app').value;
        var apm = document.getElementById('apm').value;

        var nombrecompleto = nombre + app + apm;
*/

 
    </script> 

    <br>


</body>

</html>