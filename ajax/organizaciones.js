function ListarDepartamento(){
	$.ajax({
		type: 'GET',
		url: './../controllers/OrganizacionController.php?opcion=ListarDepartamentos',
		success: function(r) {
            data = $.parseJSON(r);
            if (data.length > 0) {
                select = "<option> Seleccione </option>";
                $.each(data, function(key, value) {
                    select = select + "<option value=" + value[0] + ">" + value[1] + "</option>";
                });
                $('#select_dep').html(select);
            }
        }
	});
}

function ListarMunicipio(departamento) {
    $.ajax({
        type: "POST",
        data: "departamento=" + $('#select_dep').val(),
        url: './../controllers/OrganizacionController.php?opcion=ListarMunicipios',
        success: function(r) {
            $('#municipio').html(r);
        }
    });
}

function RegistrarOrganizacion(){
	$.ajax({
		type: 'POST',
		data: $('#form_externa').serialize(),
		url: './../controllers/OrganizacionController.php?opcion=RegistrarOrganizacion',
		success: function(r){
			console.log(r);
			if (r == 1) {
				Swal.fire(
				  'Exito!',
				  'La organizacion se ha registrado con exito!',
				  'success'
				)
			} else if(r == 0){
				//console.log(r);
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Algo salio mal!',
				})
			}
		}
	});
}
