<?php
session_start();
require_once '../models/ModelAnexo.php';
$objAnexo = new Anexo();
switch ($_REQUEST['opcion']) {
	case 'GuardarArchivo':
	require_once '../config/funciones.php';
	$Sede = $_SESSION['sesion_beies']['sede'];
	if ($_FILES['dato']['size'] > 0 && $_FILES['dato']['error'] === UPLOAD_ERR_OK ) {
		$nombreArchivo = basename($_FILES['dato']['name']);
		$carpetaSede = '../archivos/'.$Sede;

		if (!file_exists($carpetaSede)) {
			mkdir($carpetaSede, 0777, true);
		}

		$archivoTemporal =  $_FILES['dato']['tmp_name'];
		$rutaFinal = $carpetaSede. "/" .$nombreArchivo;
		$datos = [
			'NombreArchivo' => $nombreArchivo,
			'TipoArchivo' => ObtenerExtension($_FILES['dato']['name']),
			'URL' => $rutaFinal,
			'ExperienciaID' => filter_input(INPUT_POST, 'relacion_experiencia', FILTER_SANITIZE_SPECIAL_CHARS)
		];
		if (move_uploaded_file($archivoTemporal, $rutaFinal)) {
			$objAnexo->GuardarRegistro($datos);
			$response = 1;
		}
	} else {
		var_dump($_FILES['dato']);
		$response = 0;
	}
	echo($response);
	break;

	case 'EliminarArchivo':
	$id = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
	$carpetaSede = $_SESSION['sesion_beies']['sede'];
	$nombreArchivo = $objAnexo->ObtenerNombre($id);
	$rutaEliminar = $nombreArchivo['nombre_archivo'];
	$path = "../archivos/".$carpetaSede."/".$rutaEliminar;
	if (file_exists($path)) {
		if(unlink($path)){
			if($objAnexo->EliminarArchivo($id)){
				$response = 1;
			}
		}
	}else {
		$response = 0;
	}
	echo $response;
	break;
}

