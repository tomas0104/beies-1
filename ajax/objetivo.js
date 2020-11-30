function Registrar_Objetivo() {
    $.ajax({
        type: 'POST',
        url: './../controllers/ObjetivoController.php?opcion=RegistrarObjetivo',
        data: $('#form_objetivo').serialize(),
        success: function (respuesta) {
            if (respuesta == 1) {
                Swal.fire(
                        'Exito',
                        'Registro agregado con exito',
                        'success'
                        )
                setTimeout("location.href = 'fases'", 1500);
            } else if (respuesta == 0) {
                console.log('respuesta->',respuesta);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Algo salio mal!',
                })
            }
             console.log('respuesta->',respuesta);
        }
    });
}

function GetID_Objetivo() {

    id = $('#selectexp_objetivo').val();
    $.ajax({
        type: "POST",
        data: "ID=" + id,
        url: "./../controllers/ObjetivoController.php?opcion=GetID",
        success: function (r) {
            //console.log(r);
            var data = $.parseJSON(r);
            if (data.length > 0) {
                $('#IDexp_objetivo').val(data[0]['ID_objetivo']);

                $('#objetivo_general').val(data[0]['objetivo_general']);
                $('#especifico_1').val(data[0]['especifico_1']);
                $('#especifico_2').val(data[0]['especifico_2']);
                $('#especifico_3').val(data[0]['especifico_3']);
                $('#especifico_4').val(data[0]['especifico_4']);
                $('#descripcion_problema').val(data[0]['descripcion_problema']);
                $('#solucion_problema').val(data[0]['solucion_problema']);
                $('#keywords').val(data[0]['keywords']);
            }
        }
    });
}

function Actualizar_Objetivo(){ 
    $.ajax({
        type: 'POST',
        url: './../controllers/ObjetivoController.php?opcion=ActualizarObjetivo',
        data: $('#form_objetivo').serialize(),
        success: function (respuesta) {
          if (respuesta == 1) {
                Swal.fire(
                        'Exito',
                        'Registro agregado con exito',
                        'success'
                        )
                setTimeout("location.href = 'fases'", 1500);
            } else if (respuesta == 0) {
                console.log('respuesta->',respuesta);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Algo salio mal!',
                })
            }
           setTimeout("location.href = 'fases'", 1500);
        }
    });
}

