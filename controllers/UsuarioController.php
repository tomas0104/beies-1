<?php

session_start();
require_once '../models/ModelUsuario.php';
require_once '../config/funciones.php';

$objeto_usuario = new Usuario;

switch (htmlspecialchars($_REQUEST['opcion'], ENT_QUOTES)) {

    case 'ValidarUsuario':
        $Email = filter_input(INPUT_POST, 'Correo', FILTER_SANITIZE_EMAIL);
        $Pass = filter_input(INPUT_POST, 'Password', FILTER_DEFAULT);
        if (isset($Email, $Pass) && !empty($Email) && !empty($Pass)) {
            $user = $objeto_usuario->ValidarUsuario($Email, $Pass);
            if ($user) {
                foreach ($user as $campos => $valor) {
                    $_SESSION["sesion_beies"][$campos] = $valor;
                }
                $response = 1;
            } else {
                $response = 2;
            }
        } 
        echo $response;
        break;

    case 'RegistrarUsuario':
        $datos = [
            'Nombres' => quitar_tildes(filter_input(INPUT_POST, 'nombres_userU', FILTER_SANITIZE_STRING)),
            'Apellidos' => quitar_tildes(filter_input(INPUT_POST, 'apellidos_userU', FILTER_SANITIZE_STRING)),
            'Usuario' => quitar_tildes(filter_input(INPUT_POST, 'name_userU', FILTER_SANITIZE_STRING)),
            'Password' => filter_input(INPUT_POST, 'password_userU', FILTER_DEFAULT),
            'Email' => quitar_tildes(filter_input(INPUT_POST, 'correo_userU', FILTER_SANITIZE_EMAIL)),
            'Rol' => quitar_tildes(filter_input(INPUT_POST, 'user_rolU', FILTER_SANITIZE_STRING)),
            'Estado' => quitar_tildes(filter_input(INPUT_POST, 'user_estadoU', FILTER_SANITIZE_STRING)),
            'Sede' => filter_input(INPUT_POST, 'user_sedeU', FILTER_SANITIZE_STRING)
        ];

        if ($objeto_usuario->RegistrarUsuario($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;
        break;

    case 'ListarUsuario':
        $datos = $objeto_usuario->ListarUsuarios();
        if ($datos) {
            for ($i = 0; $i < count($datos); $i++) {
                $list[] = [
                    '0' => $datos[$i]['ID'],
                    '1' => $datos[$i]['nombre']
                ];
            }
            echo json_encode($list);
        }
        break;

    case 'ObtenerID':
        $id = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
        if (isset($id) && !empty($id)) {

            $data = $objeto_usuario->ObtenerID($id);
            if ($data) {
                $list[] = [
                    "ID" => $data['ID'],
                    'Nombres' => $data['nombre'],
                    "Apellidos" => $data['apellido'],
                    "Usuario" => $data['usuario'],
                    "Password" => $data['pass'],
                    "Correo" => $data['email'],
                    "RolUser" => $data['rol'],
                    "EstadoUsuario" => $data['estado_usuario'],
                    "Sede" => $data['sede']
                ];
                echo json_encode($list);
            }
        }
        break;

        case 'ActualizarUsuario':
        $datos = [
            'ID' => filter_input(INPUT_POST, 'UPDATE_ID', FILTER_SANITIZE_NUMBER_INT),
            'Nombres' => quitar_tildes(filter_input(INPUT_POST, 'nombres_userU', FILTER_SANITIZE_STRING)),
            'Apellidos' => quitar_tildes(filter_input(INPUT_POST, 'apellidos_userU', FILTER_SANITIZE_STRING)),
            'Usuario' => quitar_tildes(filter_input(INPUT_POST, 'name_userU', FILTER_SANITIZE_STRING)),
            'Pass' => trim(filter_input(INPUT_POST, 'password_userU', FILTER_SANITIZE_STRING)),
            'Email' => trim(quitar_tildes(filter_input(INPUT_POST, 'correo_userU', FILTER_SANITIZE_EMAIL))),
            'Rol' => quitar_tildes(filter_input(INPUT_POST, 'user_rolU', FILTER_SANITIZE_STRING)),
            'Estado' => quitar_tildes(filter_input(INPUT_POST, 'user_estadoU', FILTER_SANITIZE_STRING)),
            'Sede' => quitar_tildes(filter_input(INPUT_POST, 'user_sedeU', FILTER_SANITIZE_STRING))
        ];
        if ($objeto_usuario->EditarUsuario($datos)) {
            $response = 1;
        } else {
            $response = 0;
        }
        echo $response;
        
        break;


    case 'CerrarSesion':
        session_destroy();
        header("location:../");
        break;
}
?>