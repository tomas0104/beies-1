<?php

require_once '../models/ModelExperiencia.php';

$objeto = new experiencia;

switch ($_REQUEST['opcion']) {

    //CASE PARA CAPTURAR Y REGISTRAS LOS DATOS DE UNA EXPERIENCIA
    case 'registrar_experiencia':
        //Funcion para limpiar string
    require_once '../config/funciones.php';

        //Convertir array categoria[] en string separado por comas
    if (empty($_POST['categoria'])) {
        $result_categoria = "";
    } else {
        $categoria = $_POST['categoria'];
        $html1 = "";
        foreach ($categoria as $key) {
            $html1 .= $key . ', ';
        }
        $result_categoria = rtrim($html1, ', ');
    }

        //Convertir array areas[] en string separado por comas
    if (empty($_POST['area'])) {
        $result_area = "";
    } else {
        $area = $_POST['area'];
        $html2 = "";
        foreach ($area as $key) {
            $html2 .= $key . ', ';
        }
        $result_area = rtrim($html2, ', ');
    }

        //Convertir array areas[] en string separado por comas
    if (empty($_POST['ambito'])) {
        $result_ambito = "";
    } else {
        $ambito = $_POST['ambito'];
        $html3 = "";
        foreach ($ambito as $key) {
            $html3 .= $key . ', ';
        }
        $result_ambito = rtrim($html3, ', ');
    }

        //Convertir array areas[] en string separado por comas
    if (empty($_POST['dificultad'])) {
        $result_dificultad = "";
    } else {
        $dificultad = $_POST['dificultad'];
        $html4 = "";
        foreach ($dificultad as $key) {
            $html4 .= $key . ', ';
        }
        $result_dificultad = rtrim($html4, ', ');
    }

        //Convertir array espaciosinvolucrados[] en string separado por comas
    if (empty($_POST['espacios'])) {
        $result_espacios = "";
    } else {
        $result_espacios = $_POST['espacios'];
        $html5 = "";
        foreach ($result_espacios as $key) {
            $html5 .= $key . ', ';
        }
        $result_espacios = rtrim($html5, ', ');
    }

        //Convertir array nivelterritorial[] en string separado por comas
    if (empty($_POST['nivel_territorial'])) {
        $result_nivelterritorial = "";
    } else {
        $result_nivelterritorial = $_POST['nivel_territorial'];
        $html6 = "";
        foreach ($result_nivelterritorial as $key) {
            $html6 .= $key . ', ';
        }
        $result_nivelterritorial = rtrim($html6, ', ');
    }

        //Convertir array fomento[] en string separado por comas
    if (empty($_POST['fomento'])) {
        $result_fomento = "";
    } else {
        $fomento = $_POST['fomento'];
        $html7 = "";
        foreach ($fomento as $key) {
            $html7 .= $key . ', ';
        }
        $result_fomento = rtrim($html7, ', ');
    }

        //Comprobar los radio button vacios
    if (empty($_POST['chkPassPort'])) {
        $checkbox1 = "";
    } else {
        $checkbox1 = $_POST['chkPassPort'];
    }

    if (empty($_POST['chkPassPort2'])) {
        $checkbox2 = "";
    } else {
        $checkbox2 = $_POST['chkPassPort2'];
    }

    if (empty($_POST['p_publico'])) {
        $opcion_1 = "";
    } else {
        $opcion_1 = $_POST['p_publico'];
    }

    if (empty($_POST['relacion_1'])) {
        $opcion_2 = "";
    } else {
        $opcion_2 = $_POST['relacion_1'];
    }

    if (empty($_POST['plan_desarrollo'])) {
        $opcion_3 = "";
    } else {
        $opcion_3 = $_POST['plan_desarrollo'];
    }

        //Comprobar los campos  de respuesta ¿Cual?
    if (empty($_POST['vinculo_cual'])) {
        $vinculo_cual = "";
    } else {
        $vinculo_cual = $_POST['vinculo_cual'];
    }

    if (empty($_POST['cual_pertenece'])) {
        $cual_pertenece = "";
    } else {
        $cual_pertenece = $_POST['cual_pertenece'];
    }

    $original_date = $_POST['fecha_inicio'];
    $timestamp = strtotime($original_date);
    $new_date_i = date("Y-m-d", $timestamp);

    $datos = array(
        'Nombre_categoria' => quitar_tildes($_POST['nombre']),
        'Categoria' => quitar_tildes($result_categoria),
        'Sede' => quitar_tildes($_POST['sede']),
        'Areas' => quitar_tildes($result_area),
        'Fecha_inicio' => quitar_tildes($new_date_i),
        'Componente_internacionalizacion' => quitar_tildes($_POST['componente_internacionalizacion']),
        'Descripcion_componente' => quitar_tildes($_POST['desc_ci']),
        'Integracion' => quitar_tildes($_POST['integracion']),
        'Descripcion_integracion' => quitar_tildes($_POST['desc_integracion']),
        'Ambito' => quitar_tildes($result_ambito),
        'Dificultad' => quitar_tildes($result_dificultad),
        'Recurso_tiemporecurso' => $_POST['r_tiempo_recurso'],
        'Recurso_talentoempresarial' => quitar_tildes($_POST['r_talento_empresarial']),
        'Recurso_recursofinanciero' => quitar_tildes($_POST['r_recurso_financiero']),
        'Recurso_recursotecnico' => quitar_tildes($_POST['r_recurso_tecnico']),
        'Espacios_utilizados' => quitar_tildes($result_espacios),
        'Expectativa' => quitar_tildes($_POST['expectativa']),
        'Descripcion_expectativa' => quitar_tildes($_POST['desc_continuidad']),
        'Estado_evaluacion' => quitar_tildes($_POST['estado_evaluacion']),
        'Componente_multidisciplinar' => quitar_tildes($_POST['c_multidisciplinar']),
        'Componente_tics' => quitar_tildes($_POST['c_utilizacion_tic']),
        'Componente_interdisciplinario' => quitar_tildes($_POST['c_interdisciplinario']),
        'Componente_trabajointerinstitucional' => quitar_tildes($_POST['c_trabajo_interinstitucional']),
        'Componente_nuevodesarrollo' => quitar_tildes($_POST['c_nuevo_desarrollo']),
        'Componente_transferencia' => quitar_tildes($_POST['c_transferencia']),
        'Componente_inclusion' => quitar_tildes($_POST['c_inclusion']),
        'Componente_otro' => quitar_tildes($_POST['c_otro']),
        'Descripcion_formato' => quitar_tildes($_POST['d_formato']),
        'Descripcion_cuestionario' => quitar_tildes($_POST['d_cuestionario']),
        'Descripcion_entrevista' => quitar_tildes($_POST['d_entrevista']),
        'Descripcion_focusgroup' => quitar_tildes($_POST['d_focus_group']),
        'Descripcion_visitacampo' => quitar_tildes($_POST['d_visita_campo']),
        'Descripcion_evaluacionexterna' => quitar_tildes($_POST['d_evaluacion_externa']),
        'Descripcion_otroespecifique' => quitar_tildes($_POST['d_otro_especifique']),
        'Nivel_territorial' => quitar_tildes($result_nivelterritorial),
        'Ubicacion_geografica' => quitar_tildes($_POST['ubicacion_geografica']),
        'Relacion_universidadactor' => quitar_tildes($_POST['relacion']),
        'Descripcion_universidadactor' => quitar_tildes($_POST['desc_relacion']),
        'Resultados_esperados' => quitar_tildes($_POST['resultados']),
        'Conocimiento_dinamicas' => quitar_tildes($_POST['dinamicas']),
        'Opcion_vinculoredes' => $checkbox1,
        'Vinculo_redes' => quitar_tildes($vinculo_cual),
        'Opcion_pertenece' => $checkbox2,
        'Cual_pertenece' => quitar_tildes($cual_pertenece),
        'Fomento_economico' => quitar_tildes($result_fomento),
        'Participacion_publico' => $opcion_1,
        'Relacion_instituciones' => $opcion_2,
        'Plan_desarrollo' => $opcion_3
    );

    if ($objeto->Registrar_Experiencia($datos)) {
        $respuesta = 1;
    } else {
        $respuesta = 0;
    }
    echo $respuesta;

    break;

    case 'Select_Exp':
    $datos = $objeto->SelectExp();
    if ($datos) {
        foreach ($datos as $lista) {
            $list[] = array(
                "0" => $lista['ID'],
                "1" => $lista['nombre_experiencia']
            );
        }
        echo json_encode($list);
    }
    break;

    case 'ObtenerID':
    $id = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
    if (isset($id) && !empty($id)) {
        $data = $objeto->ObtenerID($id);
        if ($data) {
            $list[] = [
                "ID" => $data['ID'],
                "NombreExperiencia" => $data['nombre_experiencia'],
                "CategoriaExperiencia" => $data['categoria_experiencia'],
                "Sede" => $data['sede'],
                "AreasInvolucradas" => $data['area_involucrada'],
                "FechaInicio" => $data['fecha_inicio'],
                "ComponenteInterncionlizacion" => $data['comp_inter'],
                "DescripcionComponente" => $data['desc_componente'],
                "Relacion" => $data['relacion_inves_proyeccion'],
                "DescRelacion" => $data['desc_inves_proyecccion'],
                "Ambito" => $data['ambito_resp_social'],
                "DificultadExperiencia" => $data['dificultades_desarrollo_practica'],
                "RecursoTiempo" => $data['recursos_invertido_tiempo'],
                "RecursoTalento" => $data['recursos_invertido_talento'],
                "RecursoFinanciero" => $data['recursos_invertido_financiero'],
                "RecursoTecnico" => $data['recursos_invertido_tecnicos'],
                "EspaciosInvolucrados" => $data['espacios_involucrados'],
                "ExpectativaContinuidad" => $data['expectativa_continuidad'],
                "DescExpectativa" => $data['desc_continuidad'],
                "EstadoEvaluacion" => $data['estado_evaluacion'],
                "InnovacionMultidisciplinar" => $data['innovacion_multidisciplinar'],
                "InnovacionTIC" => $data['innovacion_tic'],
                "InnovacionInterdisciplinar" => $data['innovacion_interdisciplinario'],
                "InnovacionInterinstitucional" => $data['innovacion_interinstitucional'],
                "InnovacionNuevoDesarrollo" => $data['innovacion_nuevo_desarrollo'],
                "InnovacionTransparencia" => $data['innovacion_transferencia'],
                "InnovacionInclusion" => $data['innovacion_inclusion'],
                "InnovacionOtro" => $data['innovacion_otro'],
                "EvaluacionFormato" => $data['evaluacion_formato'],
                "EvaluacionCuestionario" => $data['evaluacion_cuestionario'],
                "EvaluacionEntrevista" => $data['evaluacion_entrevista'],
                "EvaluacionFocusGroup" => $data['evaluacion_focus_group'],
                "EvaluacionVisita" => $data['evaluacion_visita'],
                "EvaluacionExterna" => $data['evaluacion_externa'],
                "EvaluacionOtro" => $data['evaluacion_otro'],
                "NivelTerritorial" => $data['nivel_territorial'],
                "UbicacionGeografica" => $data['ubicacion_geografica'],
                "Relacion2" => $data['relacion_universidad_actor'],
                "Descripcion_universidadactor" => $data['desc_relacion_uniactor'],
                "ResultadosEsperados" => $data['resultados_esperados'],
                "PertenenciaTerritorial" => $data['pertenencia_territorial1'],
                "OpcionPertenencia1" => $data['opcion_si_pertenencia1'],
                "PertenenciaTerritorial1" => $data['pertenencia_territorial2'],
                "OpcionPertenencia2" => $data['opcion_si_pertenencia2'],
                "PertenenciaTerritorial2" => $data['pertenencia_territorial3'],
                "ParticipacionEconomica" => $data['participacion_economica_5'],
                "ParticipacionLocal1" => $data['participacion_plan_local1'],
                "ParticipacionLocal2" => $data['participacion_plan_local2'],
                "ParticipacionLocal3" => $data['participacion_plan_local3'],
            ];
            echo json_encode($list);
        }
    }
    break;
    
    case 'ActualizarExperiencia':
    require_once '../config/funciones.php';

    $original_date = filter_input(INPUT_POST, 'fecha_inicio', FILTER_SANITIZE_SPECIAL_CHARS);
    $timestamp = strtotime($original_date);
    $new_date_i = date("Y-m-d", $timestamp);
    $datos = [
        'ID' => $_POST['IDUpdate'],
        'NombreExperiencia' => (empty(filter_input(INPUT_POST, 'nombreexp'))) ? "" : quitar_tildes(filter_input(INPUT_POST,'nombreexp', FILTER_SANITIZE_STRING)),
        'CategoriaExperiencia' => (empty($_POST['categoria'])) ? "" : ArrayComas($_POST['categoria']),
        'Sede' => filter_input(INPUT_POST, 'sede', FILTER_SANITIZE_SPECIAL_CHARS),
        'Areas' => (empty($_POST['area'])) ? "" : ArrayComas($_POST['area']),
        'FechaInicio' => $new_date_i,
        'ComponenteInternacionalizacion' => filter_input(INPUT_POST, 'componente_internacionalizacion', FILTER_SANITIZE_SPECIAL_CHARS),
        'DescripcionComponente' => filter_input(INPUT_POST, 'desc_ci', FILTER_SANITIZE_SPECIAL_CHARS),
        'Integracion' => filter_input(INPUT_POST, 'integracion', FILTER_SANITIZE_SPECIAL_CHARS),
        'DescripcionIntegracion' => filter_input(INPUT_POST, 'desc_integracion', FILTER_SANITIZE_SPECIAL_CHARS),
        'Ambito' => (empty($_POST['ambito'])) ? "" : ArrayComas($_POST['ambito']),
        'Dificultad' => (empty($_POST['dificultad'])) ? "" : ArrayComas($_POST['dificultad']),
        'RecursoTiempo' => filter_input(INPUT_POST, 'r_tiempo_recurso', FILTER_SANITIZE_SPECIAL_CHARS),
        'RecursoTalento' => filter_input(INPUT_POST, 'r_talento_empresarial', FILTER_SANITIZE_SPECIAL_CHARS),
        'RecursoFinanciero' => filter_input(INPUT_POST, 'r_recurso_financiero', FILTER_SANITIZE_SPECIAL_CHARS),
        'RecursoTecnico' => filter_input(INPUT_POST, 'r_recurso_tecnico', FILTER_SANITIZE_SPECIAL_CHARS),
        'EspaciosInvolucrados' =>  (empty($_POST['espacios'])) ? "" : ArrayComas($_POST['espacios']),
        'ExpectativaContinuidad' => filter_input(INPUT_POST, 'expectativa', FILTER_SANITIZE_SPECIAL_CHARS),
        'DescripcionExpectativa' => filter_input(INPUT_POST, 'desc_continuidad', FILTER_SANITIZE_SPECIAL_CHARS),
        'EstadoEvaluacion' => filter_input(INPUT_POST, 'estado_evaluacion', FILTER_SANITIZE_SPECIAL_CHARS),
        'ComponenteMultidisciplinar' => filter_input(INPUT_POST, 'c_multidisciplinar', FILTER_SANITIZE_SPECIAL_CHARS),
        'ComponenteTic' => filter_input(INPUT_POST, 'c_utilizacion_tic', FILTER_SANITIZE_SPECIAL_CHARS),
        'ComponenteInterdisciplinario' => filter_input(INPUT_POST, 'c_interdisciplinario', FILTER_SANITIZE_SPECIAL_CHARS),
        'ComponenteInterinstitucional' => filter_input(INPUT_POST, 'c_trabajo_interinstitucional', FILTER_SANITIZE_SPECIAL_CHARS),
        'ComponenteTecnologico' => filter_input(INPUT_POST, 'c_nuevo_desarrollo', FILTER_SANITIZE_SPECIAL_CHARS),
        'ComponenteTransferencia' => filter_input(INPUT_POST, 'c_transferencia', FILTER_SANITIZE_SPECIAL_CHARS),
        'ComponenteInclusion' => filter_input(INPUT_POST, 'c_inclusion', FILTER_SANITIZE_SPECIAL_CHARS),
        'ComponenteOtro' => filter_input(INPUT_POST, 'c_otro', FILTER_SANITIZE_SPECIAL_CHARS),
        'Formatos' => filter_input(INPUT_POST, 'd_formato', FILTER_SANITIZE_SPECIAL_CHARS),
        'Cuestionarios' => filter_input(INPUT_POST, 'd_cuestionario', FILTER_SANITIZE_SPECIAL_CHARS),
        'Entrevistas' => filter_input(INPUT_POST, 'd_entrevista', FILTER_SANITIZE_SPECIAL_CHARS),
        'FocusGroup' => filter_input(INPUT_POST, 'd_focus_group', FILTER_SANITIZE_SPECIAL_CHARS),
        'Visitas' => filter_input(INPUT_POST, 'd_visita_campo', FILTER_SANITIZE_SPECIAL_CHARS),
        'Evaluaciones' => filter_input(INPUT_POST, 'd_evaluacion_externa', FILTER_SANITIZE_SPECIAL_CHARS),
        'OtroEvaluaciones' => filter_input(INPUT_POST, 'd_otro_especifique', FILTER_SANITIZE_SPECIAL_CHARS),
        'NivelTerritorial' => (empty($_POST['nivel_territorial'])) ? "" : ArrayComas($_POST['nivel_territorial']),
        'UbicacionGeografica' => filter_input(INPUT_POST, 'ubicacion_geografica', FILTER_SANITIZE_SPECIAL_CHARS),
        'RelacionUniversidadActor' => filter_input(INPUT_POST, 'relacionUni', FILTER_SANITIZE_SPECIAL_CHARS),
        'DescripcionUniactor' => filter_input(INPUT_POST, 'desc_relacion', FILTER_SANITIZE_SPECIAL_CHARS),
        'ResultadosEsperados' => filter_input(INPUT_POST, 'resultados', FILTER_SANITIZE_SPECIAL_CHARS),
        'Participacion1' => filter_input(INPUT_POST, 'participacion1', FILTER_SANITIZE_SPECIAL_CHARS),
        'OpcionParticipacion2' => filter_input(INPUT_POST, 'chkPassPort', FILTER_SANITIZE_SPECIAL_CHARS),
        'Participacion2' => filter_input(INPUT_POST, 'vinculo_cual', FILTER_SANITIZE_SPECIAL_CHARS),
        'OpcionParticipacion3' => filter_input(INPUT_POST, 'chkPassPort2', FILTER_SANITIZE_SPECIAL_CHARS),
        'Participacion3' => filter_input(INPUT_POST, 'cual_pertenece', FILTER_SANITIZE_SPECIAL_CHARS),
        'Fomento' => (empty($_POST['fomento'])) ? "" : ArrayComas($_POST['fomento']),
        'ParticipacionLocal1' => filter_input(INPUT_POST, 'p_publico', FILTER_SANITIZE_SPECIAL_CHARS),
        'ParticipacionLocal2' => filter_input(INPUT_POST, 'relacion_1', FILTER_SANITIZE_SPECIAL_CHARS),
        'ParticipacionLocal3' => filter_input(INPUT_POST, 'plan_desarrollo', FILTER_SANITIZE_SPECIAL_CHARS)
    ];
    if ($objeto->ActualizarExperiencia($datos)) {
        $respuesta = 1;
    } else {
        $respuesta = 0;
    }
    echo $respuesta;
    break;
}
?>