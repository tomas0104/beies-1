<?php 
header('Content-Type: text/html; charset=utf-8');
require_once '../models/ModelOrganizacionExterna.php';

$objeto = new ModelOrganizacion;

switch ($_REQUEST['opcion']) {
	case 'RegistrarOrganizacion':
	//Funcion para limpiar string
		require_once '../config/funciones.php';

		$datos = array(
			'ID' => quitar_tildes($_POST['relacion_experiencia']),
			'TipoDocumento' => quitar_tildes($_POST['tipo_documento']),
			'NumeroDocumento' => quitar_tildes($_POST['numero_doc']),
			'Nombre' => quitar_tildes($_POST['nombre']),
			'Departamento' => quitar_tildes($_POST['departamento']),
			'Municipio' => quitar_tildes($_POST['municipio']),
			'Telefono' => quitar_tildes($_POST['telefono']),
			'Celular' => quitar_tildes($_POST['celular']),
			'Direccion' => quitar_tildes($_POST['direccion']),
			'Correo' => quitar_tildes($_POST['correo']),
			'SectorPublico' => quitar_tildes($_POST['sector_publico']),
			'SectorEducativo' => quitar_tildes($_POST['sector_educativo']),
			'SectorEcosol' => quitar_tildes($_POST['sector_ecosol']),
			'SectorSociedadCivil' => quitar_tildes($_POST['sector_sc']),
			'SectorIntegracionRedes' => quitar_tildes($_POST['sector_ir']),
			'SectorPrivado' => quitar_tildes($_POST['sector_ep'])
		);

		if ($objeto->RegistrarOrganizacion($datos)) {
			$response = 1;
		} else {
			$response = 0;
		}
		echo $response;

	break;
	
	case 'ListarDepartamentos':
		$datos = $objeto->SelectDepartamento();
		if ($datos) {
                for ($i = 0; $i < count($datos); $i++) {
                    $list[] = array(
                        "0" => $datos[$i]['id'],
                        "1" => $datos[$i]['nombre']
                    );
                }
                echo json_encode($list, JSON_PRETTY_PRINT);
            }		
	break;

	case 'ListarMunicipios':
			$departamento = $_POST['departamento'];
            $data = $objeto->SelectMunicipio($departamento);
            if ($data) {
                $list[] = array(
                    "ID" => $data['id'],
                    "NOMBRE" => $data['nombre']
                );
                echo json_encode($list);
            }
        
		break;
}

 ?>