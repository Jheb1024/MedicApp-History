addEvent(window,'load',inicializarEventos,false);
var sintomas;
var enfermedad;
var medicacion;
var medicacion;
var presion_arterial;
var temperatura;
var coste;

function inicializarEventos()
{
    //alert('si funciona');
    var ob=document.getElementById('btn_consulta');
    addEvent(ob,'click',validar,false);
}
function addEvent(elemento,nomevento,funcion,captura)
{
    if (elemento.attachEvent)
    {
        elemento.attachEvent('on'+nomevento,funcion);
        return true;
}else  
    if (elemento.addEventListener)
    {
        elemento.addEventListener(nomevento,funcion,captura);
        return true;
    }else
        return false;
}
function validar(){
    sintomas = document.getElementById('sintomas').value;
    enfermedad = document.getElementById('enfermedad').value;
    medicacion = document.getElementById('sintomas').value;
    presion_arterial = document.getElementById('presion_arterial').value;
    temperatura = document.getElementById('temperatura').value;
    coste = document.getElementById('coste').value;

    if(!sintomas){
        document.getElementById('sintomas_advice').innerHTML='<div style="color:red;">Introduzca los datos</div>';
    }
    if(!enfermedad){
        document.getElementById('enfermedad_advice').innerHTML='<div style="color:red;">Introduzca los datos</div>';
    }
    if(!medicacion){
        document.getElementById('medicacion_advice').innerHTML='<div style="color:red;">Introduzca los datos</div>';
    }
    if(!presion_arterial){
        document.getElementById('presion_advice').innerHTML='<div style="color:red;">Introduzca los datos</div>';
    }
    if(!temperatura){
        document.getElementById('temperatura_advice').innerHTML='<div style="color:red;">Introduzca los datos</div>';
    }
    if(!coste){
        document.getElementById('coste_advice').innerHTML='<div style="color:red;">Introduzca los datos</div>';
    }
    if(sintomas && enfermedad && medicacion && presion_arterial &&
        temperatura && coste){
            console.log("Datos correctos");
            //Realizar ajax
            MotorAjax();
    }
}
var conexion;
function MotorAjax(){
    var enviar ="&sintomas="+sintomas+"&enfermedad="+enfermedad+"&medicacion="+medicacion+
    "&presion_arterial="+presion_arterial+"&temperatura="+temperatura+"&coste="+coste;
    var parametros = {
        "sintomas" : sintomas,
        "enfermedad" : enfermedad,
        "medicacion" : medicacion,
        "presion_arterial" : presion_arterial,
        "temperatura" : temperatura,
        "coste" : coste
    };
    $.ajax({
        data:  parametros,
        url:   'controllers/consulta_form.php',
        dataType: 'html',
        type:  'post',
        beforeSend: function () {
                //$("#resultado").html("Procesando, espere por favor...");
                console.log(parametros);
        },
        success:  function (response) {
                //jQuery("#resultado").html(response);
                console.log(response);
                
                document.getElementById('id01').style.display='block';
            
                // Get the modal
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                resetForm($('#consultaForm'));
        }
});
}
function resetForm($form) {
    $form.find('input:text, input:number,, input:password, input:file, select, textarea').val('');
    $form.find('input:radio, input:checkbox')
         .removeAttr('checked').removeAttr('selected');
}