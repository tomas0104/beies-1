function Registrar_fase() {
    $.ajax({
        type: 'POST',
        data: $('#form-fase').serialize(),
        url: './../controllers/FaseController.php?opcion=Registrar_Fase',
        success: function (respuesta) {
            console.log(respuesta);

            if (respuesta == 1) {
                Swal.fire(
                        'Exito',
                        'El registro agregado con exito',
                        'success'
                        )
                setTimeout("location.href = 'fases'", 1500);
            } else if (respuesta == 0) {
                console.log(respuesta);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Algo salio mal!',
                })
            }
        }
    });
}

function GetID() {

    id = $('#select_nombreexp').val();
    $.ajax({
        type: "POST",
        data: "ID=" + id,
        url: "./../controllers/FaseController.php?opcion=ObtenerID",
        dataType: 'html',
        success: function (r) {
            console.log(r);
            var data = $.parseJSON(r);
            if (data.length > 0) {
                $('#IDFASE').val(data[0]['ID']);

                $('#nombre_f1').val(data[0]['nombre_fase1']);
                $('#acciones_f1').val(data[0]['acciones_fase1']);
                $('#resulE_f1').val(data[0]['resultadoE_fase1']);
                $('#indicador_f1').val(data[0]['indicador_fase1']);
                $('#resulO_f1').val(data[0]['resultadoO_fase1']);
                $('#tiempo_f1').val(data[0]['tiempo_fase1']);
                $('#recurso_f1').val(data[0]['recurso_fase1']);
                $('#responsable_f1').val(data[0]['responsable_fase1']);
                $('#metodo_f1').val(data[0]['metodo_fase1']);
                $('#instrumento_f1').val(data[0]['instrumento_fase1']);

                $('#nombre_f2').val(data[0]['nombre_fase2']);
                $('#acciones_f2').val(data[0]['acciones_fase2']);
                $('#resulE_f2').val(data[0]['resultadoE_fase2']);
                $('#indicador_f2').val(data[0]['indicador_fase2']);
                $('#resulO_f2').val(data[0]['resultadoO_fase2']);
                $('#tiempo_f2').val(data[0]['tiempo_fase2']);
                $('#recurso_f2').val(data[0]['recurso_fase2']);
                $('#responsable_f2').val(data[0]['responsable_fase2']);
                $('#metodo_f2').val(data[0]['metodo_fase2']);
                $('#instrumento_f2').val(data[0]['instrumento_fase2']);

                $('#nombre_f3').val(data[0]['nombre_fase3']);
                $('#acciones_f3').val(data[0]['acciones_fase3']);
                $('#resulE_f3').val(data[0]['resultadoE_fase3']);
                $('#indicador_f3').val(data[0]['indicador_fase3']);
                $('#resulO_f3').val(data[0]['resultadoO_fase3']);
                $('#tiempo_f3').val(data[0]['tiempo_fase3']);
                $('#recurso_f3').val(data[0]['recurso_fase3']);
                $('#responsable_f3').val(data[0]['responsable_fase3']);
                $('#metodo_f3').val(data[0]['metodo_fase3']);
                $('#instrumento_f3').val(data[0]['instrumento_fase3']);

                $('#nombre_f4').val(data[0]['nombre_fase4']);
                $('#acciones_f4').val(data[0]['acciones_fase4']);
                $('#resulE_f4').val(data[0]['resultadoE_fase4']);
                $('#indicador_f4').val(data[0]['indicador_fase4']);
                $('#resulO_f4').val(data[0]['resultadoO_fase4']);
                $('#tiempo_f4').val(data[0]['tiempo_fase4']);
                $('#recurso_f4').val(data[0]['recurso_fase4']);
                $('#responsable_f4').val(data[0]['responsable_fase4']);
                $('#metodo_f4').val(data[0]['metodo_fase4']);
                $('#instrumento_f4').val(data[0]['instrumento_fase4']);

                $('#nombre_f5').val(data[0]['nombre_fase5']);
                $('#acciones_f5').val(data[0]['acciones_fase5']);
                $('#resulE_f5').val(data[0]['resultadoE_fase5']);
                $('#indicador_f5').val(data[0]['indicador_fase5']);
                $('#resulO_f5').val(data[0]['resultadoO_fase5']);
                $('#tiempo_f5').val(data[0]['tiempo_fase5']);
                $('#recurso_f5').val(data[0]['recurso_fase5']);
                $('#responsable_f5').val(data[0]['responsable_fase5']);
                $('#metodo_f5').val(data[0]['metodo_fase5']);
                $('#instrumento_f5').val(data[0]['instrumento_fase5']);
            }
        }
    });
}



function Actualizar_fase() {
    $.ajax({
        type: 'POST',
        data: $('#form-fase').serialize(),
        url: './../controllers/FaseController.php?opcion=Actualizar_Fase',
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta == 1) {
                Swal.fire(
                        'Exito',
                        'Registro actualizado con exito',
                        'success'
                        )
                setTimeout("location.href = 'fases'", 1500);
            } else if (respuesta == 0) {
                console.log(respuesta);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Algo salio mal!',
                })
            }
        }
    });
}