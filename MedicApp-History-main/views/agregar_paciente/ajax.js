var ref = document.getElementById('formulario');
  ref.addEventListener('click',iniciar,false)

var xhr;

function iniciar()
{
    e.preventDefault();
    var ob1=document.getElementById("nombre");
    var ob2=document.getElementById("app");

    jugar(ob1.value);
}

function jugar()
{
  //INCISO C
  var comparar = document.getElementById("nombre");

  xhr = crearXMLHttpRequest();
  let comparar = document.querySelector("#nombre").value;

  xhr.onreadystatechange = procesar;
   
    xhr.open("GET",`alerta.php?nombre=${comparar}`,false);
    xhr.send(null);    
}

function procesar()
    {
      var resultados = document.getElementById("load");
       if(xhr.readyState==4 && xhr.status==200)
       {
            resultados.innerHTML = '';
         //inciso D
         xhr.innerHTML = resultados;
         var div = xhr.responseText;
    actualizar(div);
  
       }
       else
       {
        xhr.innerHTML = resultados;
      }
       }

       function actualizar(ganancia)
{
  
  var nuevaGanancia = document.getElementById("resultados");
  nuevaGanancia.innerHTML = ganancia;
  
}

function crearXMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}
