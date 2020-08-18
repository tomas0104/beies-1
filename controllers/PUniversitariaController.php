<?php

session_start();

require_once '../models/ModelPoblacionUniversitaria.php';

$objeto = new PoblacionUniversitaria;

switch ($_REQUEST['opcion']) {
    case 'Select_Experiencia':
        $sede = $_SESSION['sesion_beies']['sede'];
        $datos = $objeto->SelectExperiencia($sede);
        if ($datos) {
            for ($i = 0; $i < count($datos); $i++) {
                $list[] = array(
                    "0" => $datos[$i]['ID'],
                    "1" => $datos[$i]['nombre_experiencia']
                );
            }
            echo json_encode($list, JSON_PRETTY_PRINT);
        }
        break;

    case 'registrar_poblacionU':
        //Funcion para limpiar string
        require_once '../config/funciones.php';
        $exp = $_POST['relacion_experiencia'];

        //Convertir array tipologia[] en string separado por comas
        if (empty($_POST['tipologia'])) {
            $result_tipologia = "";
        } else {
            $tipologia = $_POST['tipologia'];
            $html = "";
            foreach ($tipologia as $key) {
                $html .= $key . ', ';
            }
            $result_tipologia = rtrim($html, ', ');
        }

        if ($exp == 0) {
            $response = 0;
        } else {
            $datos = array(
                'ID' => $_POST['relacion_experiencia'],
                'TipoDocumento' => quitar_tildes($_POST['tipo_documento']),
                'NumeroDocumento' => $_POST['numero_doc'],
                'CodigoUniversidad' => $_POST['codigo_universidad'],
                'Nombres' => quitar_tildes($_POST['nombres']),
                'Apellidos' => quitar_tildes($_POST['apellidos']),
                'Telefono' => $_POST['telefono'],
                'Celular' => $_POST['celular'],
                'Correo' => quitar_tildes($_POST['correo']),
                'VinculoExperiencia' => quitar_tildes($_POST['vinculo']),
                'VinculoUniversidad' => quitar_tildes($_POST['vinculo_2']),
                'Sede' => quitar_tildes($_POST['sede']),
                'Facultad' => quitar_tildes($_POST['facultad']),
                'Programa' => quitar_tildes($_POST['programa']),
                'Horas' => $_POST['horas'],
                'TipologiaActividad' => quitar_tildes($result_tipologia)
            );

            $objeto->Registrar($datos);
            $response = 1;
        }
        echo $response;
        break;

    case 'ObtenerID':
        $id = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
        if (isset($id) && !empty($id)) {
            $data = $objeto->ObtenerID($id);
            if ($data) {
                $list[] = [
                    "ID" => $data['ID'],
                    "TipoDocumento" => $data['tipo_documento'],
                    "NumeroDocumento" => $data['numero_documento'],
                    "CodigoUniversidad" => $data['codigo_universidad'],
                    "Nombres" => $data['nombres'],
                    "Apellidos" => $data['apellidos'],
                    "Telefono" => $data['telefono'],
                    "Celular" => $data['celular'],
                    "Correo" => $data['correo'],
                    "VinculoExperiencia" => $data['vinculacion_experiencia'],
                    "VinculoUniversidad" => $data['vinculacion_universidad'],
                    "Sede" => $data['sede'],
                    "Facultad" => $data['facultad'],
                    "Programa" => $data['programa'],
                    "Horas" => $data['horas'],
                    "TipologiaActividad" => $data['tipologia_actividad']
                ];
                echo json_encode($list);
                
            }
        }
        break;

    case 'ActualizarDatos':
        require_once '../config/funciones.php';
        $datos = [
            'ID' => filter_input(INPUT_POST, 'ID_Poblacion', FILTER_SANITIZE_NUMBER_INT),
            'TipoDocumento' => filter_input(INPUT_POST, 'tipo_documento', FILTER_SANITIZE_SPECIAL_CHARS),
            'VinculoExperiencia' => filter_input(INPUT_POST, 'vinculo', FILTER_SANITIZE_SPECIAL_CHARS),
            'NumeroDocumento' => filter_input(INPUT_POST, 'numero_doc', FILTER_SANITIZE_NUMBER_INT),
            'CodigoUniversidad' => filter_input(INPUT_POST, 'codigo_universidad', FILTER_SANITIZE_NUMBER_INT),
            'Nombres' => filter_input(INPUT_POST, 'nombres', FILTER_SANITIZE_SPECIAL_CHARS),
            'Apellidos' => filter_input(INPUT_POST, 'apellidos', FILTER_SANITIZE_SPECIAL_CHARS),
            'Telefono' => filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_SPECIAL_CHARS),
            'Celular' => filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS),
            'Correo' => filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_SPECIAL_CHARS),
            'VinculoUniversidad' => filter_input(INPUT_POST, 'vinculo_2', FILTER_SANITIZE_SPECIAL_CHARS),
            'Sede' => filter_input(INPUT_POST, 'sede', FILTER_SANITIZE_SPECIAL_CHARS),
            'Facultad' => filter_input(INPUT_POST, 'facultad', FILTER_SANITIZE_SPECIAL_CHARS),           
            'Programa' => filter_input(INPUT_POST, 'programa', FILTER_SANITIZE_SPECIAL_CHARS),
            'Horas' => filter_input(INPUT_POST, 'horas', FILTER_SANITIZE_NUMBER_INT),
            'TipologiaActividad' => (empty($_POST['tipologia'])) ? "Null" : ArrayComas($_POST['tipologia'])
        ];
        if($objeto->ActualizarPoblacion($datos)){
            $response = 1;
        }else{
            $response = 0;
        }
        echo $response;
        break;
}
?>