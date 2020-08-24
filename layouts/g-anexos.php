<?php 
require_once '../models/ModelAnexo.php';
$objetoAnexo = new Anexo;
//$sede = $_SESSION['sesion_beies']['sede'];
$datos = $objetoAnexo->ListarAnexos();
if ($datos) {
	$tabla = '<table id="tabla1" class="table table-striped table-hover table-bordered">
	<thead style="background: #00abc8;">
	<tr>
	<th style="color: white;">Experiencia pertenece</th>
	<th style="color: white;">Nombre archivo</th>
	<th style="color: white;">Tipo archivo</th>
	<th style="color: white;">Descargar</th>
	<th style="color: white;">Eliminar</th>
	</tr>
	</thead>
	<tbody>';
	$datosTabla = "";

	foreach ($datos as $key => $value) {
		$datosTabla = $datosTabla . '<tr>
		<td>' . $value['nombre_experiencia'] . '</td>
		<td>' . $value['nombre_archivo'] . '</td>
		<td>' . $value['tipo_archivo'] . '</td>

		<td>
		<a download href="'.$value["ruta_archivo"].'"><span class="btn btn-success btn-sm" data-toggle="modal" data-backdrop="static" data-target="#modal-update">
		<i class="fa fa-download"></i>
		</span><a/>
		</td>

		<td>
		<span class="btn btn-danger btn-sm" onclick="EliminarArchivo('.$value['ID'].')" data-toggle="modal" data-backdrop="static" data-target="#modal-update">
		<i class="fa fa-trash"></i>
		</span>
		</td>
		</tr>';
	}

	$tfooter= '<tfoot style="background: #00abc8;">
	<tr>
	<th style="color: white;">Experiencia pertenece</th>
	<th style="color: white;">Nombre archivo</th>
	<th style="color: white;">Tipo archivo</th>
	<th style="color: white;">Descargar</th>
	<th style="color: white;">Eliminar</th>
	</tr>
	</tfoot>';
}
echo $tabla . $datosTabla . '</tbody>'.$tfooter.'</table>';
?>
