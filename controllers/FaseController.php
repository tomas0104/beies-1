<?php

require_once '../models/ModelFase.php';
require_once '../config/funciones.php';

$objFase = new fase();

switch (htmlspecialchars($_REQUEST['opcion'], ENT_QUOTES)) {
    case 'Registrar_Fase':
        $datos = [
            'Experiencia_ID' => filter_input(INPUT_POST, 'relacion_experiencia', FILTER_SANITIZE_NUMBER_INT),
            'Nombre_fase1' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase1', FILTER_SANITIZE_STRING)),
            'Acciones_fase1' => quitar_tildes(filter_input(INPUT_POST, 'acciones_fase1', FILTER_SANITIZE_STRING)),
            'Resultados_fase1' => quitar_tildes(filter_input(INPUT_POST, 'resultados_esperadosf1', FILTER_SANITIZE_STRING)),
            'Indicador_fase1' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase1', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase1' => quitar_tildes(filter_input(INPUT_POST, 'resultados_obtenidosf1', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase1' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase1', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase1' => quitar_tildes(filter_input(INPUT_POST, 'recursos_empleadosf1', FILTER_SANITIZE_STRING)),
            'Responsable_fase1' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase1', FILTER_SANITIZE_STRING)),
            'Metodo_fase1' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase1', FILTER_SANITIZE_STRING)),
            'Instrumento_fase1' => quitar_tildes(filter_input(INPUT_POST, 'instrumento_fase1', FILTER_SANITIZE_STRING)),
            'Nombre_fase2' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase2', FILTER_SANITIZE_STRING)),
            'Acciones_fase2' => quitar_tildes(filter_input(INPUT_POST, 'aciones_fase2', FILTER_SANITIZE_STRING)),
            'Resultados_fase2' => quitar_tildes(filter_input(INPUT_POST, 'resultados_fase2', FILTER_SANITIZE_STRING)),
            'Indicador_fase2' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase2', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase2' => quitar_tildes(filter_input(INPUT_POST, 'resultado_obtenidof2', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase2' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase2', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase2' => quitar_tildes(filter_input(INPUT_POST, 'recursos_fase2', FILTER_SANITIZE_STRING)),
            'Responsable_fase2' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase2', FILTER_SANITIZE_STRING)),
            'Metodo_fase2' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase2', FILTER_SANITIZE_STRING)),
            'Instrumento_fase2' => quitar_tildes(filter_input(INPUT_POST, 'instrumentos_fase2', FILTER_SANITIZE_STRING)),
            'Nombre_fase3' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase3', FILTER_SANITIZE_STRING)),
            'Acciones_fase3' => quitar_tildes(filter_input(INPUT_POST, 'acciones_fase3', FILTER_SANITIZE_STRING)),
            'Resultados_fase3' => quitar_tildes(filter_input(INPUT_POST, 'resultados_fase3', FILTER_SANITIZE_STRING)),
            'Indicador_fase3' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase3', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase3' => quitar_tildes(filter_input(INPUT_POST, 'resultados_obtenidosf3', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase3' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase3', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase3' => quitar_tildes(filter_input(INPUT_POST, 'recursos_fase3', FILTER_SANITIZE_STRING)),
            'Responsable_fase3' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase3', FILTER_SANITIZE_STRING)),
            'Metodo_fase3' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase3', FILTER_SANITIZE_STRING)),
            'Instrumento_fase3' => quitar_tildes(filter_input(INPUT_POST, 'instrumentos_fase3', FILTER_SANITIZE_STRING)),
            'Nombre_fase4' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase4', FILTER_SANITIZE_STRING)),
            'Acciones_fase4' => quitar_tildes(filter_input(INPUT_POST, 'acciones_fase4', FILTER_SANITIZE_STRING)),
            'Resultados_fase4' => quitar_tildes(filter_input(INPUT_POST, 'resultados_fase4', FILTER_SANITIZE_STRING)),
            'Indicador_fase4' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase4', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase4' => quitar_tildes(filter_input(INPUT_POST, 'resultado_obtenidof4', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase4' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase4', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase4' => quitar_tildes(filter_input(INPUT_POST, 'recursos_fase4', FILTER_SANITIZE_STRING)),
            'Responsable_fase4' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase4', FILTER_SANITIZE_STRING)),
            'Metodo_fase4' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase4', FILTER_SANITIZE_STRING)),
            'Instrumento_fase4' => quitar_tildes(filter_input(INPUT_POST, 'instrumentos_fase4', FILTER_SANITIZE_STRING)),
            'Nombre_fase5' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase5', FILTER_SANITIZE_STRING)),
            'Acciones_fase5' => quitar_tildes(filter_input(INPUT_POST, 'acciones_fase5', FILTER_SANITIZE_STRING)),
            'Resultados_fase5' => quitar_tildes(filter_input(INPUT_POST, 'resultados_fase5', FILTER_SANITIZE_STRING)),
            'Indicador_fase5' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase5', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase5' => quitar_tildes(filter_input(INPUT_POST, 'resultados_obtenidosf5', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase5' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase5', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase5' => quitar_tildes(filter_input(INPUT_POST, 'recursos_fase5', FILTER_SANITIZE_STRING)),
            'Responsable_fase5' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase5', FILTER_SANITIZE_STRING)),
            'Metodo_fase5' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase5', FILTER_SANITIZE_STRING)),
            'Instrumento_fase5' => quitar_tildes(filter_input(INPUT_POST, 'instrumentos_fase5', FILTER_SANITIZE_STRING)),
        ];
        if ($objFase->RegistrarFase($datos)) {
            $response = 1;
        } else {
            $response = 0;
        }
        echo $response;
        break;

    case 'Actualizar_Fase':
        $datos = [
            'ID' => filter_input(INPUT_POST, 'faseID', FILTER_SANITIZE_NUMBER_INT),
            'Experiencia_ID' => filter_input(INPUT_POST, 'relacion_experiencia', FILTER_SANITIZE_NUMBER_INT),
            'Nombre_fase1' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase1', FILTER_SANITIZE_STRING)),
            'Acciones_fase1' => quitar_tildes(filter_input(INPUT_POST, 'acciones_fase1', FILTER_SANITIZE_STRING)),
            'Resultados_fase1' => quitar_tildes(filter_input(INPUT_POST, 'resultados_esperadosf1', FILTER_SANITIZE_STRING)),
            'Indicador_fase1' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase1', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase1' => quitar_tildes(filter_input(INPUT_POST, 'resultados_obtenidosf1', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase1' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase1', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase1' => quitar_tildes(filter_input(INPUT_POST, 'recursos_empleadosf1', FILTER_SANITIZE_STRING)),
            'Responsable_fase1' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase1', FILTER_SANITIZE_STRING)),
            'Metodo_fase1' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase1', FILTER_SANITIZE_STRING)),
            'Instrumento_fase1' => quitar_tildes(filter_input(INPUT_POST, 'instrumento_fase1', FILTER_SANITIZE_STRING)),
            'Nombre_fase2' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase2', FILTER_SANITIZE_STRING)),
            'Acciones_fase2' => quitar_tildes(filter_input(INPUT_POST, 'aciones_fase2', FILTER_SANITIZE_STRING)),
            'Resultados_fase2' => quitar_tildes(filter_input(INPUT_POST, 'resultados_fase2', FILTER_SANITIZE_STRING)),
            'Indicador_fase2' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase2', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase2' => quitar_tildes(filter_input(INPUT_POST, 'resultado_obtenidof2', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase2' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase2', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase2' => quitar_tildes(filter_input(INPUT_POST, 'recursos_fase2', FILTER_SANITIZE_STRING)),
            'Responsable_fase2' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase2', FILTER_SANITIZE_STRING)),
            'Metodo_fase2' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase2', FILTER_SANITIZE_STRING)),
            'Instrumento_fase2' => quitar_tildes(filter_input(INPUT_POST, 'instrumentos_fase2', FILTER_SANITIZE_STRING)),
            'Nombre_fase3' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase3', FILTER_SANITIZE_STRING)),
            'Acciones_fase3' => quitar_tildes(filter_input(INPUT_POST, 'acciones_fase3', FILTER_SANITIZE_STRING)),
            'Resultados_fase3' => quitar_tildes(filter_input(INPUT_POST, 'resultados_fase3', FILTER_SANITIZE_STRING)),
            'Indicador_fase3' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase3', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase3' => quitar_tildes(filter_input(INPUT_POST, 'resultados_obtenidosf3', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase3' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase3', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase3' => quitar_tildes(filter_input(INPUT_POST, 'recursos_fase3', FILTER_SANITIZE_STRING)),
            'Responsable_fase3' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase3', FILTER_SANITIZE_STRING)),
            'Metodo_fase3' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase3', FILTER_SANITIZE_STRING)),
            'Instrumento_fase3' => quitar_tildes(filter_input(INPUT_POST, 'instrumentos_fase3', FILTER_SANITIZE_STRING)),
            'Nombre_fase4' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase4', FILTER_SANITIZE_STRING)),
            'Acciones_fase4' => quitar_tildes(filter_input(INPUT_POST, 'acciones_fase4', FILTER_SANITIZE_STRING)),
            'Resultados_fase4' => quitar_tildes(filter_input(INPUT_POST, 'resultados_fase4', FILTER_SANITIZE_STRING)),
            'Indicador_fase4' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase4', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase4' => quitar_tildes(filter_input(INPUT_POST, 'resultado_obtenidof4', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase4' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase4', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase4' => quitar_tildes(filter_input(INPUT_POST, 'recursos_fase4', FILTER_SANITIZE_STRING)),
            'Responsable_fase4' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase4', FILTER_SANITIZE_STRING)),
            'Metodo_fase4' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase4', FILTER_SANITIZE_STRING)),
            'Instrumento_fase4' => quitar_tildes(filter_input(INPUT_POST, 'instrumentos_fase4', FILTER_SANITIZE_STRING)),
            'Nombre_fase5' => quitar_tildes(filter_input(INPUT_POST, 'nombre_fase5', FILTER_SANITIZE_STRING)),
            'Acciones_fase5' => quitar_tildes(filter_input(INPUT_POST, 'acciones_fase5', FILTER_SANITIZE_STRING)),
            'Resultados_fase5' => quitar_tildes(filter_input(INPUT_POST, 'resultados_fase5', FILTER_SANITIZE_STRING)),
            'Indicador_fase5' => quitar_tildes(filter_input(INPUT_POST, 'indicador_fase5', FILTER_SANITIZE_STRING)),
            'Resultados_obtenidos_fase5' => quitar_tildes(filter_input(INPUT_POST, 'resultados_obtenidosf5', FILTER_SANITIZE_STRING)),
            'Tiempo_empleado_fase5' => quitar_tildes(filter_input(INPUT_POST, 'tiempo_fase5', FILTER_SANITIZE_STRING)),
            'Recursos_empleados_fase5' => quitar_tildes(filter_input(INPUT_POST, 'recursos_fase5', FILTER_SANITIZE_STRING)),
            'Responsable_fase5' => quitar_tildes(filter_input(INPUT_POST, 'responsable_fase5', FILTER_SANITIZE_STRING)),
            'Metodo_fase5' => quitar_tildes(filter_input(INPUT_POST, 'metodo_fase5', FILTER_SANITIZE_STRING)),
            'Instrumento_fase5' => quitar_tildes(filter_input(INPUT_POST, 'instrumentos_fase5', FILTER_SANITIZE_STRING)),
        ];

        if ($objFase->ActualizarFase($datos)) {

            $response = 1;
        } else {
            $response = 0;
        }
        echo $response;
        break;


    case 'ObtenerID':
        
        $numero = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
        if (isset($numero) && !empty($numero)) {

            $data = $objFase->ObtenerID($numero);
            if ($data) {
                $list[] = [
                    "ID" => $data['ID'],
                    'ID_exp' => $data['id_experiencia'],
                    "nombre_fase1" => $data['f1_nombre'],
                    "acciones_fase1" => $data['f1_acciones'],
                    "resultadoE_fase1" => $data['f1_resultados_esperado'],
                    "indicador_fase1" => $data['f1_indicadores_cumplimiento'],
                    "resultadoO_fase1" => $data['f1_resultado_obtenido'],
                    "tiempo_fase1" => $data['f1_tiempo_empleado'],
                    "recurso_fase1" => $data['f1_recurso_empleado'],
                    "responsable_fase1" => $data['f1_responsable'],
                    "metodo_fase1" => $data['f1_metodo_seguimiento'],
                    "instrumento_fase1" => $data['f1_instrumento_verificacion'],
                    "nombre_fase2" => $data['f2_nombre'],
                    "acciones_fase2" => $data['f2_acciones'],
                    "resultadoE_fase2" => $data['f2_resultados_esperado'],
                    "indicador_fase2" => $data['f2_indicadores_cumplimiento'],
                    "resultadoO_fase2" => $data['f2_resultado_obtenido'],
                    "tiempo_fase2" => $data['f2_tiempo_empleado'],
                    "recurso_fase2" => $data['f2_recurso_empleado'],
                    "responsable_fase2" => $data['f2_responsable'],
                    "metodo_fase2" => $data['f2_metodo_seguimiento'],
                    "instrumento_fase2" => $data['f2_instrumento_verificacion'],
                    "nombre_fase3" => $data['f3_nombre'],
                    "acciones_fase3" => $data['f3_acciones'],
                    "resultadoE_fase3" => $data['f3_resultados_esperado'],
                    "indicador_fase3" => $data['f3_indicadores_cumplimiento'],
                    "resultadoO_fase3" => $data['f3_resultado_obtenido'],
                    "tiempo_fase3" => $data['f3_tiempo_empleado'],
                    "recurso_fase3" => $data['f3_recurso_empleado'],
                    "responsable_fase3" => $data['f3_responsable'],
                    "metodo_fase3" => $data['f3_metodo_seguimiento'],
                    "instrumento_fase3" => $data['f3_instrumento_verificacion'],
                    "nombre_fase4" => $data['f4_nombre'],
                    "acciones_fase4" => $data['f4_acciones'],
                    "resultadoE_fase4" => $data['f4_resultados_esperado'],
                    "indicador_fase4" => $data['f4_indicadores_cumplimiento'],
                    "resultadoO_fase4" => $data['f4_resultado_obtenido'],
                    "tiempo_fase4" => $data['f4_tiempo_empleado'],
                    "recurso_fase4" => $data['f4_recurso_empleado'],
                    "responsable_fase4" => $data['f4_responsable'],
                    "metodo_fase4" => $data['f4_metodo_seguimiento'],
                    "instrumento_fase4" => $data['f4_instrumento_verificacion'],
                    "nombre_fase5" => $data['f5_nombre'],
                    "acciones_fase5" => $data['f5_acciones'],
                    "resultadoE_fase5" => $data['f5_resultados_esperado'],
                    "indicador_fase5" => $data['f5_indicadores_cumplimiento'],
                    "resultadoO_fase5" => $data['f5_resultado_obtenido'],
                    "tiempo_fase5" => $data['f5_tiempo_empleado'],
                    "recurso_fase5" => $data['f5_recurso_empleado'],
                    "responsable_fase5" => $data['f5_responsable'],
                    "metodo_fase5" => $data['f5_metodo_seguimiento'],
                    "instrumento_fase5" => $data['f5_instrumento_verificacion']
                ];

                echo json_encode($list);
            }
        }
        break;


    default:
        break;
}


