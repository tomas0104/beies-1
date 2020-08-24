function GuardarArchivo(){
	var formdata = new FormData(document.getElementById('form_agregar'));
	$.ajax({
        url: './../controllers/AnexoController.php?opcion=GuardarArchivo',
        type: 'POST',
        datatype: 'html',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        success: function (r) {
         console.log(r);
         if (r == 1) {
            Swal.fire(
                'Exito',
                'Archivo guardado con exito!',
                'success'
                )
            setTimeout("location.href = 'anexos'", 1500);
        }
    }
});
    return false;
}

function EliminarArchivo(idArchivo){
    Swal.fire({
        title: 'Estas seguro de eliminar el archivo?',
        text: "Luego de eliminar no podrá ser recuperado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, deseo eliminarlo!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
            type: 'POST',
            url: './../controllers/AnexoController.php?opcion=EliminarArchivo',
            data: 'ID=' + idArchivo,
            success: function(r){
                console.log(r);
                if (r == 1) {
                    Swal.fire(
                      'Eliminado!',
                      'Tu archivo ha sido eliminado con exito.',
                      'success'
                      )
                    location.href = 'anexos';
                }else if (r !== 1){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salio mal!'
                    });
                }
            }
        });
    }
})
}