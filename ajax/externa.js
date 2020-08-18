function RegistrarExterna(){
	$.ajax({
		type: 'POST',
		data: $('#form_externa').serialize(),
		url: './../controllers/PExternaController.php?opcion=Registrar',
		success: function(respuesta){
			console.log(respuesta);
			if (respuesta == 1) {
				Swal.fire(
				  'Exito!',
				  'La poblacion se ha registrado con exito!',
				  'success'
				)
			} else if(respuesta == 0){
				console.log(respuesta);
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Algo salio mal!',
				})
			}
		}
	});
}

