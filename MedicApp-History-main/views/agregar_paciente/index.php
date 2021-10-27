<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <script type= "text/javascript" src="views\agregar_paciente\ajax.js"></script>
    <link rel="stylesheet" href="bulma/css/bulma.css">
     <title>MedicAPP</title>

     <style>
    /*body {font-family: Arial, Helvetica, sans-serif;}*/
    * {box-sizing: border-box;}

    /* Set a style for all buttons */
    button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    }

    button:hover {
    opacity:1;
    }

    /* Float cancel and delete buttons and add an equal width */
    .cancelbtn, .deletebtn {
    float: left;
    width: 50%;
    }

    /* Add a color to the cancel button */
    .cancelbtn {
    background-color: #ccc;
    color: black;
    }

    /* Add a color to the delete button */
    .deletebtn {
    background-color: #f44336;
    }

    /* Add padding and center-align text to the container */
    .container {
    padding: 16px;
    text-align: center;
    }

    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 4;
    top: 0;
    width: 600px; /* Full width */
    height: 400px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
    background-color: #fefefe;
    margin: 15% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }
    
    /* The Modal Close Button (x) */
    .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
    color: #f44336;
    cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
    content: "";
    clear: both;
    display: table;
    }

    /* Change styles for cancel button and delete button on extra small screens */
    @media screen and (max-width: 300px) {
    .cancelbtn, .deletebtn {
        width: 100%;
    }
    }
    </style>
    
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
    <input id ="nombre" type= "text" placeholder="Nombre" name= "nombre" size = "40">
    <div id="nom"> </div>
</p>
<p>
    <label for="app">Apellido paterno:</label> <br> 
    <input type= "text" placeholder = "Apellido paterno" name= "app" id= "app" size = "40" >
    <div id="ap1"> </div>
</p>
<p>
    <label for="apm">Apellido materno:</label> <br> 
<input type= "text" placeholder = "Apellido materno" name= "apm" id= "apm" size = "40" >
<div id="ap2"> </div>
</p>
<p>
    <label for="altura">Altura:</label> <br> 
<input type="number" step="any" placeholder = "Altura en metros" name= "altura"  id= "altura" size = "40">
<div id="alt"> </div>
</p>
<p>
   <label for="edad"> Edad: </label> <br> 
<input type= "number" name= "edad" id= "edad" placeholder = "Edad" size = "40">
<div id="ed"> </div>
</p>
<p>
    <label for="FechaNacimiento">Fecha de Nacimiento:</label> <br> 
    <input type= "date" id= "FechaNacimiento" name= "FechaNacimiento" size = "40">
    <div id="fecha"> </div>
</p>
<p>
    <label for="peso">Peso: </label> <br> 
    <input type="number" step="any" name= "peso" id= "peso" placeholder = "Peso en kg" size = "40">
    <div id="pe"> </div>
</p>
<p>
    <label for="no_seguro_social">No. Seguro Social:</label> <br> 
    <input type= "text" name= "no_seguro_social" id= "no_seguro_social" placeholder = "No. Seguro Social" size = "40">
    <div id="seguro"> </div>
</p>

<button type = "button" id= "guardar" name= "guardar" > Guardar </button>
<button type="reset" id="borrar" value="Borrar">  Borrar </button>
<!--<input type="submit" id="guardar" value="Guardar">-->


<div id="mensaje">

    <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
    <form class="modal-content" action="/action_page.php">
    <div class="container">
        <h1>Registro exitoso</h1>
        <p>El registro se ha realizado con exitoso</p>

        <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
        </div>
    </div>
    </form>
</div>
</div>

</form>



</body>

</html>