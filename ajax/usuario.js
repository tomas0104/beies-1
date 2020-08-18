function ValidarUsuario() {
    $.ajax({
        type: 'POST',
        data: $('#form-login').serialize(),
        url: 'controllers/UsuarioController.php?opcion=ValidarUsuario',
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta == 1) {
                Swal.fire(
                        'Exito',
                        'Bienvenido',
                        'success'
                        )
                setTimeout(function () {
                    window.location.href = 'views/inicio';
                }, 1200);

            } else if (respuesta == 2) {
                Swal.fire({
                    icon: 'error',
                    text: 'Usuario no encontrado',
                });
                $('#form-login')[0].reset();
            }
        }
    });
    return false;
}

function RegistrarUsuario() {
    $.ajax({
        type: 'POST',
        data: $('#form_UpdateUser').serialize(),
        url: './../controllers/UsuarioController.php?opcion=RegistrarUsuario',
        success: function (respuesta) {
            if (respuesta == 1) {
                Swal.fire(
                        'Exito',
                        'Usuario agregado con exito',
                        'success'
                        )
                $('#form_UpdateUser')[0].reset();
            } else if (respuesta == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo salio mal!',
                })
            }
        }
    });
    return false;

}

function ConsultarUsuario() {
    id = $('#List_User').val();
    $.ajax({
        type: "POST",
        data: "ID=" + id,
        url: "./../controllers/UsuarioController.php?opcion=ObtenerID",
        success: function (r) {
            var data = $.parseJSON(r);
            if (data.length > 0) {
                $('#ID_UPDATE').val(data[0]['ID']);
                $('#user_nameU').val(data[0]['Usuario']);
                $('#estado_userU').val(data[0]['EstadoUsuario']);
                $('#sede_userU').val(data[0]['Sede']);
                $('#user_nombresU').val(data[0]['Nombres']);
                $('#user_apellidosU').val(data[0]['Apellidos']);
                $('#user_correoU').val(data[0]['Correo']); 
                $('#user_passwordU').val(data[0]['Password']);
                $('#rolUserU').val(data[0]['RolUser']);
            }
        }
    });
}

function ListarUsuarios() {
    $.ajax({
        url: './../controllers/UsuarioController.php?opcion=ListarUsuario',
        type: 'GET',
        success: function (r) {
            data = $.parseJSON(r);
            if (data.length > 0) {
                select = "<option value=''> Seleccione </option>";
                $.each(data, function (key, value) {
                    select = select + "<option value=" + value[0] + ">" + value[1] + "</option>";
                });
                $('#List_User').html(select);
            }
        }
    });
}

function ActualizarUser(){
    $.ajax({
        url: './../controllers/UsuarioController.php?opcion=ActualizarUsuario',
        type: 'POST',
        data: $('#form_UpdateUser').serialize(),
        success: function(r){
            console.log(r);
           if (r == 1) {
                Swal.fire(
                        'Exito!',
                        'Datos Actualizados!',
                        'success'
                        )
                $('#form_UpdateUser')[0].reset();
            } else if (r == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo salio mal!',
                })
            }
        }
    });   
}