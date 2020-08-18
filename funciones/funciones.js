function ValidarLogin() {
    $(document).ready(function () {
        $('#btn-entrar').click(function () {

            if ($('#Correo').val() == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Debes ingresar el correo',
                });
                return false;

            } else if ($('#Password').val() == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Debes ingresar la contraseña',
                });
                return false;
            }
        });
    });
}
