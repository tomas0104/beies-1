init();

function init() {
    SelectExperiencia();
}

function registrar_experiencia() {
    $.ajax({
        type: 'POST',
        url: './../controllers/ExperienciaController.php?opcion=registrar_experiencia',
        data: $('#form_principal').serialize(),
        success: function (respuesta) {
           // console.log(respuesta);
            if (respuesta == 1) {
                Swal.fire(
                    'Exito!',
                    'La experiencia se ha registrado con exito!',
                    'success'
                    )
                $('#form_principal')[0].reset();
            } else if (respuesta == 0) {
                console.log(respuesta);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo salio mal!'
                });
            }
        }
    });
}

function ListarExp() {
    $.ajax({
        url: './../controllers/ExperienciaController.php?opcion=ListarExp',
        type: 'POST',
        success: function (r) {
            $('#tabla_exp').html(r);
        }
    });
}

function SelectExperiencia() {
    $.ajax({
        url: './../controllers/ExperienciaController.php?opcion=Select_Exp',
        type: 'GET',
        success: function (r) {
            data = $.parseJSON(r);
            if (data.length > 0) {
                select = "<option value='0'> Seleccione </option>";
                $.each(data, function (key, value) {
                    select = select + "<option value=" + value[0] + ">" + value[1] + "</option>";
                });
                $('#select_nombreexp').html(select);
            }
        }
    });
}

function ObtenerID(id) {
    $.ajax({
        type: "POST",
        data: "ID=" + id,
        url: "./../controllers/ExperienciaController.php?opcion=ObtenerID",
        success: function(r) {     
            var data = $.parseJSON(r);
            $('#IDEXP').val(data[0]['ID']);
            $('#NombreExperienciaU').val(data[0]['NombreExperiencia']);
            $('#CategoriaExperienciaU').selectpicker('val', data[0]['CategoriaExperiencia'].split(', '));
            $('#SedeU').selectpicker('val', data[0]['Sede']);
            $('#AreasInvolucradasU').selectpicker('val', data[0]['AreasInvolucradas'].split(', '));
            $('#FechaInicioU').val(data[0]['FechaInicio']);
            $('#ComponenteInterncionlizacionU').selectpicker('val', data[0]['ComponenteInterncionlizacion']);
            $('#DescripcionComponenteU').val(data[0]['DescripcionComponente']);
            $('#RelacionU').selectpicker('val', data[0]['Relacion']);
            $('#DescRelacionU').val(data[0]['DescRelacion']);
            $('#AmbitoU').selectpicker('val', data[0]['Ambito'].split(', '));
            $('#DificultadExperienciaU').selectpicker('val', data[0]['DificultadExperiencia'].split(', '));
            $('#RecursoTiempoU').val(data[0]['RecursoTiempo']);
            $('#RecursoTalentoU').val(data[0]['RecursoTalento']);
            $('#RecursoFinancieroU').val(data[0]['RecursoFinanciero']);
            $('#RecursoTecnicoU').val(data[0]['RecursoTecnico']);
            $('#EspaciosInvolucradosU').selectpicker('val', data[0]['EspaciosInvolucrados'].split(', '));
            $('#ExpectativaContinuidadU').selectpicker('val', data[0]['ExpectativaContinuidad']);
            $('#DescExpectativaU').val(data[0]['DescExpectativa']);
            $('#EstadoEvaluacionU').selectpicker('val', data[0]['EstadoEvaluacion']);
            $('#InnovacionMultidisciplinarU').val(data[0]['InnovacionMultidisciplinar']);
            $('#InnovacionTICU').val(data[0]['InnovacionTIC']);
            $('#InnovacionInterdisciplinarU').val(data[0]['InnovacionInterdisciplinar']);
            $('#InnovacionInterinstitucionalU').val(data[0]['InnovacionInterinstitucional']);
            $('#InnovacionNuevoDesarrolloU').val(data[0]['InnovacionNuevoDesarrollo']);
            $('#InnovacionTransparenciaU').val(data[0]['InnovacionTransparencia']);
            $('#InnovacionInclusionU').val(data[0]['InnovacionInclusion']);
            $('#InnovacionOtroU').val(data[0]['InnovacionOtro']);
            $('#EvaluacionFormatoU').val(data[0]['EvaluacionFormato']);
            $('#EvaluacionCuestionarioU').val(data[0]['EvaluacionCuestionario']);
            $('#EvaluacionEntrevistaU').val(data[0]['EvaluacionEntrevista']);
            $('#EvaluacionFocusGroupU').val(data[0]['EvaluacionFocusGroup']);
            $('#EvaluacionVisitaU').val(data[0]['EvaluacionVisita']);
            $('#EvaluacionExternaU').val(data[0]['EvaluacionExterna']);
            $('#EvaluacionOtroU').val(data[0]['EvaluacionOtro']);
            $('#NivelTerritorialU').selectpicker('val', data[0]['NivelTerritorial'].split(', '));
            $('#UbicacionGeograficaU').selectpicker('val', data[0]['UbicacionGeografica']);
            $('#rel_uniactor').selectpicker('val', data[0]['Relacion2']);
            $("#rel_uniactor").selectpicker("refresh");
            $('#Descripcion_universidadactorU').val(data[0]['Descripcion_universidadactor']);
            $('#ResultadosEsperadosU').val(data[0]['ResultadosEsperados']);
            $('#PertenenciaTerritorialU').val(data[0]['PertenenciaTerritorial']);
            $('input[name="chkPassPort"][value="' + data[0]['OpcionPertenencia1'] + '"]').prop('checked', true);
            $('#cual1').val(data[0]['PertenenciaTerritorial1']);
            $('input[name="chkPassPort2"][value="' + data[0]['OpcionPertenencia2'] + '"]').prop('checked', true);
            $('#cual2').val(data[0]['PertenenciaTerritorial2']);
            $('#ParticipacionEconomicaU').selectpicker('val', data[0]['ParticipacionEconomica'].split(', '));
            $('input[name="p_publico"][value="' + data[0]['ParticipacionLocal1'] + '"]').prop('checked', true);
            $('input[name="relacion_1"][value="' + data[0]['ParticipacionLocal2'] + '"]').prop('checked', true);
            $('input[name="plan_desarrollo"][value="' + data[0]['ParticipacionLocal3'] + '"]').prop('checked', true);         
        }
    });
}

function ActualizarExperiencia(){
    $.ajax({
        type: 'POST',
        url: './../controllers/ExperienciaController.php?opcion=ActualizarExperiencia',
        data: $('#form_principal').serialize(),
        success: function(r){
            console.log(r);
           if (r == 1) {
                Swal.fire(
                    'Exito!',
                    'La experiencia se ha actualizado con exito!',
                    'success'
                    )
                setTimeout("location.href = 'g-experiencia'", 1000);
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

