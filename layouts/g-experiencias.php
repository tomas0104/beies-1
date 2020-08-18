<?php 

require_once '../models/ModelExperiencia.php';
$objeto = new experiencia;
$sede = $_SESSION['sesion_beies']['sede'];
$datos = $objeto->ListarExperiencia($sede);
if ($datos) {
	$tabla = '<table id="tabla1" class="table table-striped table-hover table-bordered">
	<thead style="background: #00abc8;">
	<tr>
	<th style="color: white;">Nombre</th>
	<th style="color: white;">Categoria</th>
	<th style="color: white;">Areas involucradas</th>
	<th style="color: white;">Estado</th>
	<th style="color: white;">Fecha registro</th>
	<th style="color: white;">Editar</th>
	</tr>
	</thead>
	<tbody>';
	$datosTabla = "";

	foreach ($datos as $key => $value) {
		$datosTabla = $datosTabla . '<tr>
		<td>' . $value['nombre_experiencia'] . '</td>
		<td>' . $value['categoria_experiencia'] . '</td>
		<td>' . $value['area_involucrada'] . '</td>
		<td>' . $value['estado'] . '</td>
		<td>' . $value['timestamp'] . '</td>
		<td>
		<span class="btn btn-warning" onclick="ObtenerID('.$value['ID'].')" data-toggle="modal" data-target=".bd-example-modal-lg" data-backdrop="static"><i class="fa fa-edit"></i>
		</span>
		</td>
		</tr>';
	}

	$tfooter= '<tfoot style="background: #00abc8;">
	<tr>
	<th style="color: white;">Nombre</th>
	<th style="color: white;">Categoria</th>
	<th style="color: white;">Areas involucradas</th>
	<th style="color: white;">Estado</th>
	<th style="color: white;">Fecha registro</th>
	<th style="color: white;">Editar</th>
	</tr>
	</tfoot>';
}
echo $tabla . $datosTabla . '</tbody>'.$tfooter.'</table>';
?>