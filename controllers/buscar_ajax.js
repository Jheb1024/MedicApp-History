$(buscar_datos());

function buscar_datos (consulta) {
    $.ajax({
        url: '../../controllers/buscar.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
        })
        .done(function (respuesta){
            $('#datos').html(respuesta);
        })
        .fail(function (){
            console.log("error");
        })
}

$(document).on('keyup', '#caja_busqueda', function () {
    var valor = $(this).val();
    if (valor !== "") {
        buscar_datos(valor)
    } else {
        buscar_datos();
    }
});

$(document).on('change','#opcion', function () {
    caja = $(this).val();
    campo = document.getElementById('caja_busqueda');
    if (caja == "Buscar por fecha") {
        campo.type = "date";
    } else if (caja == "Buscar por nombre"){
        campo.type = "text";
    }
});