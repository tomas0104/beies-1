<?php 
require_once '../models/ModelPoblacionExterna.php';

$objeto = new PoblacionExterna;

switch ($_REQUEST['opcion']) {
	case 'Registrar':
	//Funcion para limpiar string
        require_once '../config/funciones.php';

		//Convertir array ETNIA[] en string separado por comas
	if (empty($_POST['grupo_etario'])) {
		$result_etario = "";
	} else {
		$etnia = $_POST['grupo_etario'];
		$html1 ="";
		foreach ($etnia as $key) {
			$html1 .= $key.', ';
		}
		$result_etario = rtrim($html1, ', ');
	}

		//Convertir array etnia[] en string separado por comas
	if (empty($_POST['etnia'])) {
		$result_etnia ="";
	} else {
		$etnia = $_POST['etnia'];
		$html2 ="";
		foreach ($etnia as $key) {
			$html2 .= $key.', ';
		}
		$result_etnia = rtrim($html2, ', ');
	}

		//Convertir array tipologia[] en string separado por comas
	if (empty($_POST['tipologia'])) {
		$result_tipologia ="";
	} else {
		$tipologia = $_POST['tipologia'];
		$html3 ="";
		foreach ($tipologia as $key) {
			$html3 .= $key.', ';
		}
		$result_tipologia = rtrim($html3, ', ');
	}

		$datos = array(
			'ID' => $_POST['relacion_experiencia'],
			'TipoDocumento' => $_POST['tipo_documento'],
			'NumeroDocumento' => $_POST['numero_doc'],
			'Nombres' => quitar_tildes($_POST['nombre']),
			'Apellidos' => quitar_tildes($_POST['apellidos']),
			'Telefono' => $_POST['telefono'],
			'Celular' => $_POST['celular'],
			'Direccion' => quitar_tildes($_POST['direccion']),
			'Correo' => quitar_tildes($_POST['correo']),
			'VinculacionInstitucional' => quitar_tildes($_POST['vinculacion']),
			'GrupoEtario' => quitar_tildes($result_etario),
			'Etnia' => quitar_tildes($result_etnia),
			'TipologiaActividad' => quitar_tildes($result_tipologia),
			'SinEscolaridad' => quitar_tildes($_POST['sin_escolaridad']),
			'PrimariaIncompleta' => quitar_tildes($_POST['primaria_incompleta']),
			'PrimariaCompleta' => quitar_tildes($_POST['primaria_completa']),
			'BachilleratoIncompleto' => quitar_tildes($_POST['bachillerato_incompleto']),
			'BachilleratoCompleto' => quitar_tildes($_POST['bachillerato_completo']),
			'TecnicaCompleta' => quitar_tildes($_POST['tecnica_completa']),
			'TecnicaIncompleta' => quitar_tildes($_POST['tecnica_incompleta']),
			'Universidad' => quitar_tildes($_POST['universidad']),
			'Postgrado' => quitar_tildes($_POST['postgrado']),
			'Participacion1' => quitar_tildes($_POST['participacion1']),
			'Participacion2' => quitar_tildes($_POST['participacion2']),
			'Participacion3' => quitar_tildes($_POST['participacion3']),
			'Participacion4' => quitar_tildes($_POST['participacion4']),
			'Participacion5' => quitar_tildes($_POST['participacion5'])
		);

		if ($objeto->Registrar($datos)) {
			$response = 1;
		} else {
			$response = 0;
		}
		echo $response;
		
	break;
	
}

 ?>