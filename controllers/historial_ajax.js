$(document).ready(function () {
   $('#btn-actualizar').click(function () {
       let nombre = $('#name').val().split(" ");
       var datos =  "nombre=" + nombre[0] + "&" +
                    "app=" + nombre[1] + "&" +
                    "apm=" + nombre[2] + "&" +
                    "altura=" + $('#altura').val() + "&" +
                    "peso=" + $('#peso').val() + "&" +
                    "no_seguro_social=" + $('#no_seguro').val() + "&" +
                    "id=" + $('#id_paciente').val();
       $.ajax({
           type: 'POST',
           url: '../../controllers/actualizar_historial.php',
           data: datos,
           success: function (r) {
               if (r) {
                   alert("Información actualizada con éxito.");
               } else{
                   alert("No se pudo actualizar.");
               }
           }
       });
       return false;
   });

    $('#btn-ver-consultas').click(function () {
        var id = "id=" + $('#id_paciente').val() + "&" +
                 "altura=" + $('#altura').val();
        $.ajax({
            type: 'POST',
            url: '../../controllers/mostrar_consultas.php',
            dataType: 'html',
            data: id,
            success: function (respuesta) {
                $('#consultas').html(respuesta);
            }
        });
        return false;
    });
});