/*Esta funcion es para obtener el nombre y el ID de la
 experiencia para poder vincular a la poblacion universitaria*/

function SelectExperiencia() {
    $.ajax({
        url: './../controllers/PUniversitariaController.php?opcion=Select_Experiencia',
        type: 'GET',
        success: function (r) {
            data = $.parseJSON(r);
            if (data.length > 0) {
                select = "<option value=''> Seleccione </option>";
                $.each(data, function (key, value) {
                    select = select + "<option value=" + value[0] + ">" + value[1] + "</option>";
                });
                $('#select_nombreexp').html(select);
                $('#select_nombre').html(select);
                $('#selectexp_objetivo').html(select);
            }
        }
    });
}

/*Esta funcion es para registrar la poblacion universitaria*/
function Registrar() {
    $.ajax({
        type: 'POST',
        url: './../controllers/PUniversitariaController.php?opcion=registrar_poblacionU',
        data: $('#form-universitaria').serialize(),
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta == 1) {
                Swal.fire(
                        'Exito!',
                        'La poblacion se ha registrado con exito!',
                        'success'
                        )
                setTimeout("location.href = 'universitario'", 1500);
            } else if (respuesta == 0) {
                console.log(respuesta);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Debes seleccionar la experiencia en el item #1',
                })
                $('#select_nombreexp').focus();
            }
        }
    });
}

function UpdateDatos() {
    $.ajax({
        type: 'POST',
        data: $('#form-updateU').serialize(),
        url: './../controllers/PUniversitariaController.php?opcion=ActualizarDatos',
        success: function (r) {
            if (r == 1) {
                Swal.fire(
                    'Exito!',
                    'Datos actualizados con exito!',
                    'success'
                    )
                setTimeout("location.href = 'g-universitaria'", 1000);
            } else if (r == 0) {
                //console.log(respuesta);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo salio mal!'
                });
            }
        }
    });
    return false;
}

function GetID(id) {
    $.ajax({
        type: "POST",
        data: "ID=" + id,
        url: "./../controllers/PUniversitariaController.php?opcion=ObtenerID",
        success: function (r) {
            var data = $.parseJSON(r);
            if (data.length > 0) {
            $('#ID_PU').val(data[0]['ID']);
            $('#tipo_doc').selectpicker('val', data[0]['TipoDocumento']);
            $('#DNI').val(data[0]['NumeroDocumento']);
            $('#ID_Universidad').val(data[0]['CodigoUniversidad']);
            $('#vinculo_exp').selectpicker('val', data[0]['VinculoExperiencia']);
            $('#nombres_P').val(data[0]['Nombres']);
            $('#apellidos_P').val(data[0]['Apellidos']);
            $('#telefono_p').val(data[0]['Telefono']);
            $('#celular_p').val(data[0]['Celular']);
            $('#correo_p').val(data[0]['Correo']);
            $('#vinculo_uni').selectpicker('val', data[0]['VinculoUniversidad']);
            $('#sede_p').selectpicker('val', data[0]['Sede']);
            $('#facultad_p').selectpicker('val', data[0]['Facultad']);
            $('#programa_p').selectpicker('val', data[0]['Programa']);
            $('#horas_p').val(data[0]['Horas']);
            $('#tipologia_p').selectpicker('val', data[0]['TipologiaActividad'].split(', '));
            } else {
                alert("No hay datos para mostrar");
            }
        }
    });
}


