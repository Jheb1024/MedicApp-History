$(buscar_datos_nombre());

function buscar_datos_nombre (consulta) {
    $.ajax({
        url: '../../controllers/buscar_nombre.php',
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

function buscar_datos_fecha (consulta) {
    $.ajax({
        url: '../../controllers/buscar_fecha.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    })
        .done(function (respuesta){
            $('#datos').html(respuesta);
        })
        .fail(function (){
            console.log("error fecha");
        })
}

$(document).on('keyup', '#caja_busqueda', function () {
    var valor = $(this).val();
    if (valor !== "" && document.getElementById('caja_busqueda').type === 'date') {
        buscar_datos_fecha(valor);
    } if (valor !== "" && document.getElementById('caja_busqueda').type === 'text') {
        buscar_datos_nombre(valor);
    } else {
        buscar_datos_nombre();
    }
});

$(document).on('change','#opcion', function () {
    caja = $(this).val();
    campo = document.getElementById('caja_busqueda');
    if (caja === "Buscar por fecha") {
        campo.type = "date";
    } else if (caja === "Buscar por nombre"){
        campo.type = "text";
    }
});