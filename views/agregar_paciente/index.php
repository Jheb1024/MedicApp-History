<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <script type= "text/javascript" src="views\agregar_paciente\ajax.js"></script>
    <script type= "text/javascript" src="views\agregar_paciente\app.js"></script>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="bulma/css/pop.css">
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

    <form method="POST" id= "formulario"  role="form" enctype="multipart/form-data">

<p>
    <label for="nombre"> Nombre del paciente: </label> <br>
    <input id ="nombre" type= "text" placeholder="Nombre" name= "nombre" size = "40"
    onkeyup="if(this.value){document.getElementById('nom').innerHTML=''}">
    <div id="nom"> </div>
</p>
<p>
    <label for="app">Apellido paterno:</label> <br> 
    <input type= "text" placeholder = "Apellido paterno" name= "app" id= "app" size = "40" 
    onkeyup="if(this.value){document.getElementById('ap1').innerHTML=''}">
    <div id="ap1"> </div>
</p>
<p>
    <label for="apm">Apellido materno:</label> <br> 
<input type= "text" placeholder = "Apellido materno" name= "apm" id= "apm" size = "40" 
onkeyup="if(this.value){document.getElementById('ap2').innerHTML=''}">
<div id="ap2"> </div>
</p>
<p>
    <label for="altura">Altura:</label> <br> 
<input type="number" step="any" placeholder = "Altura en metros" name= "altura"  id= "altura" size = "40"
onkeyup="if(this.value){document.getElementById('alt').innerHTML=''}">
<div id="alt"> </div>
</p>
<p>
   <label for="edad"> Edad: </label> <br> 
<input type= "number" name= "edad" id= "edad" placeholder = "Edad" size = "40"
onkeyup="if(this.value){document.getElementById('ed').innerHTML=''}">
<div id="ed"> </div>
</p>
<p>
    <label for="FechaNacimiento">Fecha de Nacimiento:</label> <br> 
    <input type= "date" id= "FechaNacimiento" name= "FechaNacimiento"
    onchange="if(this.value){document.getElementById('fecha').innerHTML=''}">
    <div id="fecha"> </div>
</p>
<p>
    <label for="peso">Peso: </label> <br> 
    <input type="number" step="any" name= "peso" id= "peso" placeholder = "Peso en kg" size = "40"
    onkeyup="if(this.value){document.getElementById('pe').innerHTML=''}">
    <div id="pe"> </div>
</p>
<p>
    <label for="no_seguro_social">No. Seguro Social:</label> <br> 
    <input type= "text" name= "no_seguro_social" id= "no_seguro_social" placeholder = "No. Seguro Social" size = "40"
    onkeyup="if(this.value){document.getElementById('seguro').innerHTML=''}">
    <div id="seguro"> </div>
</p>

<button type = "button" id= "guardar" name= "guardar" > Guardar </button>
<input type="reset" id="borrar" value="Borrar"> 
<!--<input type="submit" id="guardar" value="Guardar">-->


<div id="mensaje"></div>
    <span id="load"></span>

    <div class = "modal-container" id="modal-container">
    <div class= "modal" id= "modal">
        <h1>¡Registro exitoso!</h1>
        <p> El registro se ha guardado</p>
        <button id="close"> Cerrar </button>
</div>
</div>

</form>




<!--
<script> 
$('formulario').on('submit', function(event) {
    event.preventDefault();

    $.ajax({
        url: "alerta.php",
        type: "POST",
        data:{
        //aca colocaras todos los campos que deseas enviar al backend
        'nombre': $('#nombre').val(), 
        'app': $('#app').val(),
    },}
        contentType: false,
        processData: false,
        success: function(data) {
            $('#mensaje').html(data);
        }
    });

});

</script>-->

<!-- <script type="text/javascript">

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
-->
    
</body>

</html>