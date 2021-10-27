
addEvent(window,'load', iniciar, false);

var nombre;
var app;
var apm;
var altura;
var edad;
var fecha;
var peso;
var seguro;

function iniciar()
{
    var ob = document.getElementById('guardar');
    addEvent(ob, 'click', validar, false);
}

function addEvent(elemento, aux, funcion, captura)
{
  if(elemento.attachEvent)
  {
    elemento.attachEvent('on',+aux,funcion);
    return true;
  }else
  if(elemento.addEventListener)
  {
    elemento.addEventListener(aux, funcion, captura);
    return true;
  }else
  return false;
}

function validar()
{
  //INCISO C
 nombre = document.getElementById('nombre').value;
  app = document.getElementById('app').value;
 apm = document.getElementById('apm').value;
 altura = document.getElementById('altura').value;
  edad = document.getElementById('edad').value;
fecha = document.getElementById('FechaNacimiento').value;
peso = document.getElementById('peso').value;
 seguro = document.getElementById('no_seguro_social').value;
  
  if(!nombre)
  {
   
    document.getElementById('nom').innerHTML = '<div style = "color:red;"> Introduzca los datos solicitados</div>';
  }
  if(!app)
  {
    document.getElementById('ap1').innerHTML = '<div style = "color:red;"> Introduzca los datos solicitados</div>';
  }
  if(!apm)
  {
    document.getElementById('ap1').innerHTML = '<div style = "color:red;"> Introduzca los datos solicitados</div>';
  }
  if(!altura)
  {
    document.getElementById('alt').innerHTML = '<div style = "color:red;"> Introduzca los datos solicitado</div> ';
  }
  if(!edad)
  {
    document.getElementById('ed').innerHTML = '<div style = "color:red;"> Introduzca los datos solicitados</div>';
  }
  if(!fecha)
  {
    document.getElementById('fecha').innerHTML = '<div style = "color:red;"> Introduzca los datos solicitados</div>';
  }
  if(!peso)
  {
    document.getElementById('pe').innerHTML = '<div style = "color:red;"> Introduzca los datos solicitados</div>';
  }
  if(!seguro)
  {
    document.getElementById('seguro').innerHTML = '<div style = "color:red;"> Introduzca los datos solicitados</div>';
  }


  if(nombre && app && apm && altura && edad && fecha && peso && seguro)
  {

    motor();
  }

}

function motor()
{
  var parametros = {
    "nombre" : nombre,
    "app" : app,
    "apm" : apm,
    "altura" : altura,
    "edad" : edad,
    "FechaNacimiento" : fecha,
    "peso" : peso,
    "no_seguro_social" : seguro
};
$.ajax({
    data:  parametros,
    url:   'controllers/nuevo.php',
    dataType: 'html',
    type:  'post',
    beforeSend: function () {
            $("#mensaje").html("Procesando, espere por favor...");
            console.log(parametros);
    },
    success:  function (response) {
            jQuery("#mensaje").html(response);
            console.log(response);
    }
});
}