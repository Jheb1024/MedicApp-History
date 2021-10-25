<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
    <script src="ajax.js" language="JavaScript"></script>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <title>MedicAPP</title>
    
</head>
<body>
<?php require 'views/home/navbar.php' ?>
<nav class="navbar is-light" role="navigation" aria-label="main-navigation">
    <div class="navbar-brand" style="padding-left: 20px; padding-top: 10px; padding-bottom: 10px;">
        <img src="img/logo%20sin%20fondo.png" alt="MedicAPP logo" width="160" height="70">
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
                    <a class="button is-light">
                        Inicio
                    </a>
                    <a class="button is-primary">
                        <strong>Buscar Paciente</strong>
                    </a>
                    <a class="button is-light">
                        Agregar Paciente
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<main class="has-text-centered has-text-primary">
    <div class="columns is-centered">
        <div class="column">
            <p class="title is-3 is-bold">
                Agregar nuevo Paciente
            </p>
</div>
</div>

    <div id="main">

    <form action="<?php echo constant('URL'); ?>agregar_paciente/crearp" method="POST" id= "formulario">

<p>
    <label for="nombre"> Nombre del paciente: </label> <br>
    <input type= "text" placeholder="Nombre" name= "nombre" size = "40" required>
</p>
<p>
    <label for="app">Apellido paterno:</label> <br> 
    <input type= "text" placeholder = "Apellido paterno" name= "app" size = "40" required>
</p>
<p>
    <label for="apm">Apellido materno:</label> <br> 
<input type= "text" placeholder = "Apellido materno" name= "apm" size = "40" required>
</p>
<p>
    <label for="altura">Altura:</label> <br> 
<input type="number" step="any" placeholder = "Altura en metros" name= "altura" size = "40" required>
</p>
<p>
   <label for="edad"> Edad: </label> <br> 
<input type= "number" name= "edad" placeholder = "Edad" size = "40" required>
</p>
<p>
    <label for="FechaNacimiento">Fecha de Nacimiento:</label> <br> 
    <input type= "date" name= "FechaNacimiento" size = "40" required>
</p>
<p>
    <label for="peso">Peso: </label> <br> 
    <input type="number" step="any" name= "peso" placeholder = "Peso en kg" size = "40" required>
</p>
<p>
    <label for="no_seguro_social">No. Seguro Social:</label> <br> 
    <input type= "text" name= "no_seguro_social" placeholder = "No. Seguro Social" size = "40" required>
</p>

<button id= "guardar"> Guardar </button>
<input type="reset" id="borrar" value="Borrar"> 


<div id="mensaje"></div>
    <span id="load"></span>


</form>
</div>

<script type="text/javascript">

$(document).ready(function(){
    //$('#guardar').click(function(){

var nombre = document.getElementById('nombre').value;
var app = document.getElementById('app').value;
var apm = document.getElementById('apm').value;

var datos = "nombre=" + nombre + "&app=" + app;

$('#mensaje').load('alerta.php');

});
//});


/*


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

    </main>

</body>

</html>