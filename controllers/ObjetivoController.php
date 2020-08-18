<?php

require_once '../models/ModelObjetivo.php';
require_once '../config/funciones.php';

$objeto = new objetivo();

switch (htmlspecialchars($_REQUEST['opcion'], ENT_QUOTES)) {

    case 'RegistrarObjetivo':
        $datos = [
            "ID_experiencia" => filter_input(INPUT_POST, 'EXP_ID', FILTER_SANITIZE_NUMBER_INT),
            "Objetivo_General" => quitar_tildes(filter_input(INPUT_POST, 'obj_general', FILTER_SANITIZE_STRING)),
            "Objetivo_especifico1" => quitar_tildes(filter_input(INPUT_POST, 'objetivo_especifico1', FILTER_SANITIZE_STRING)),
            "Objetivo_especifico2" => quitar_tildes(filter_input(INPUT_POST, 'objetivo_especifico2', FILTER_SANITIZE_STRING)),
            "Objetivo_especifico3" => quitar_tildes(filter_input(INPUT_POST, 'objetivo_especifico3', FILTER_SANITIZE_STRING)),
            "Objetivo_especifico4" => quitar_tildes(filter_input(INPUT_POST, 'objetivo_especifico4', FILTER_SANITIZE_STRING)),
            "Descripcion_problema" => quitar_tildes(filter_input(INPUT_POST, 'desc_problema', FILTER_SANITIZE_STRING)),
            "Solucion_problema" => quitar_tildes(filter_input(INPUT_POST, 'sol_problema', FILTER_SANITIZE_STRING)),
            "Palabras_claves" => quitar_tildes(filter_input(INPUT_POST, 'palabras_claves', FILTER_SANITIZE_STRING)),
        ];
        if ($objeto->RegistrarObjetivo($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;

        break;

    case 'GetID':
        $numero = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
        if (isset($numero) && !empty($numero)) {

            $data = $objeto->GetID($numero);
            if ($data) {
                $list[] = [
                    "ID_objetivo" => $data['ID'],
                    "objetivo_general" => $data['objetivo_general'],
                    "especifico_1" => $data['objetivo_especifico1'],
                    "especifico_2" => $data['objetivo_especifico2'],
                    "especifico_3" => $data['objetivo_especifico3'],
                    "especifico_4" => $data['objetivo_especifico4'],
                    "descripcion_problema" => $data['descripcion_problema'],
                    "solucion_problema" => $data['solucion_problema'],
                    "keywords" => $data['palabras_claves']
                ];
                echo json_encode($list);
            }
        }
        break;

    case 'ActualizarObjetivo':
        $datosUpdate = [
            "ID_Objetivo" => $_POST['Objetivo_IDexp'],
            "experienciaID" => filter_input(INPUT_POST, 'EXP_ID', FILTER_SANITIZE_NUMBER_INT),
            "Objetivo_General" => quitar_tildes(filter_input(INPUT_POST, 'obj_general', FILTER_SANITIZE_STRING)),
            "Objetivo_especifico1" => quitar_tildes(filter_input(INPUT_POST, 'objetivo_especifico1', FILTER_SANITIZE_STRING)),
            "Objetivo_especifico2" => quitar_tildes(filter_input(INPUT_POST, 'objetivo_especifico2', FILTER_SANITIZE_STRING)),
            "Objetivo_especifico3" => quitar_tildes(filter_input(INPUT_POST, 'objetivo_especifico3', FILTER_SANITIZE_STRING)),
            "Objetivo_especifico4" => quitar_tildes(filter_input(INPUT_POST, 'objetivo_especifico4', FILTER_SANITIZE_STRING)),
            "Descripcion_problema" => quitar_tildes(filter_input(INPUT_POST, 'desc_problema', FILTER_SANITIZE_STRING)),
            "Solucion_problema" => quitar_tildes(filter_input(INPUT_POST, 'sol_problema', FILTER_SANITIZE_STRING)),
            "Palabras_claves" => quitar_tildes(filter_input(INPUT_POST, 'palabras_claves', FILTER_SANITIZE_STRING)),
        ];

        if ($objeto->UpdateObjetivo($datosUpdate)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;
        break;
}