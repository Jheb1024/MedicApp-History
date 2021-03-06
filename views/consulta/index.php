<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    <h1 class="center">Consulta M??dica</h1>
    <br>
    <h3>Datos de la consulta</h3>
    <div id="consulta">
        <form id="consultaForm" action="" method="POST">
        <div style="text-align: left" id="datos-patologicos">
            <ul >
                <li>
                    <label for="sintomas">S??ntomas:</label>
                    <textarea id='sintomas' name="sintomas" rows="5" cols="50" placeholder = "Tos, fiebre..."
                    onkeyup="if(this.value){document.getElementById('sintomas_advice').innerHTML=''}"
                    ></textarea>
                </li>
                <div id='sintomas_advice'></div>
                <li>
                    <label for="enfermedad">Enfermedad:</label>
                    <textarea id='enfermedad' name="enfermedad" rows="2" cols="50" placeholder = "Neumon??a"
                    onkeyup="if(this.value){document.getElementById('enfermedad_advice').innerHTML=''}"
                    ></textarea>
                    
                </li>
                <div id='enfermedad_advice'></div>
                <li>
                    <label for="medicacion">Medicaci??n:</label>
                    <textarea id='medicacion' name="medicacion" rows="4" cols="50" placeholder='Ibuprofeno (Advil, Motrin IB...)'
                    onkeyup="if(this.value){document.getElementById('medicacion_advice').innerHTML=''}"
                        ></textarea>
                    <div id='medicacion_advice'></div>
                </li>
            </ul>
        </div>
        <div style="text-align: right" id="datos-fisicos">
            <ul >
                <li>
                    <label for="presion_arterial">Presi??n arterial:</label>
                    <input type="number" min="1" id="presion_arterial" name="presion_arterial" placeholder='115-155'
                    onkeyup="if(this.value){document.getElementById('presion_advice').innerHTML=''}"
                    >
                    <div id='presion_advice'></div>
                </li>
                <li>
                    <label for="temperatura">Temperatura:</label>
                    <input type="number" step="0.1" min="1" id="temperatura" name="temperatura" placeholder='37'
                    onkeyup="if(this.value){document.getElementById('temperatura_advice').innerHTML=''}"
                    >
                    <div id='temperatura_advice'></div>
                </li>
                <li>
                    <label for="coste">Costo: $</label>
                    <input type="number" step="0.1" min="0" id="coste" name="coste" placeholder='0.00'
                    onkeyup="if(this.value){document.getElementById('coste_advice').innerHTML=''}"
                    >
                    <div id='coste_advice'></div>
                </li>
            </ul>
        </div>    
        <button type="button" id = "btn_consulta" name="consulta">Guardar</button>
        </form>
    </div>
    <div id="resultado"></div>
    
    <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
    <form class="modal-content" action="/action_page.php">
    <div class="container">
        <h1>Consulta</h1>
        <p>La consulta ha sido registrada</p>
        <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Aceptar</button>
        </div>
    </div>
    </form>
    </div>

    
    <script type="text/javascript" src="views\consulta\jquery.js"></script>
    <script type="text/javascript" src="views\consulta\funciones.js"></script>
    

    <?php require 'views/footer.php' ?>
    
</body>
</html>