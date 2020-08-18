<?php 
require_once '../models/ModelPoblacionUniversitaria.php';
$objeto = new PoblacionUniversitaria;
$sede = $_SESSION['sesion_beies']['sede'];
$datos = $objeto->ListarPoblacion($sede);
if ($datos) {
	$tabla = '<table id="tabla1" class="table table-striped table-hover table-bordered">
	<thead style="background: #00abc8;">
	<tr >
	<th style="color: white;">Experiencia pertenece</th>
	<th style="color: white;">Nombres</th>
	<th style="color: white;">Apellidos</th>
	<th style="color: white;">Vinculación universidad</th>
	<th style="color: white;">Vinculación experiencia</th>
	<th style="color: white;">Programa</th>
	<th style="color: white;">Editar</th>
	</tr>
	</thead>
	<tbody>';
	$datosTabla = "";

	foreach ($datos as $key => $value) {
		$datosTabla = $datosTabla . '<tr>
		<td>' . $value['nombre_experiencia'] . '</td>
		<td>' . $value['nombres'] . '</td>
		<td>' . $value['apellidos'] . '</td>
		<td>' . $value['vinculacion_universidad'] . '</td>
		<td>' . $value['vinculacion_experiencia'] . '</td>
		<td>' . $value['programa'] . '</td>
		<td>
		<span class="btn btn-warning btn-sm" onclick="GetID('.$value['ID'].')" data-toggle="modal" data-backdrop="static" data-target="#modal-update">
		<i class="fa fa-edit"></i>
		</span>
		</td>
		</tr>';
	}

	$tfooter= '<tfoot style="background: #00abc8;">
	<tr>
	<th style="color: white;">Experiencia pertenece</th>
	<th style="color: white;">Nombres</th>
	<th style="color: white;">Apellidos</th>
	<th style="color: white;">Vinculación universidad</th>
	<th style="color: white;">Vinculación experiencia</th>
	<th style="color: white;">Programa</th>
	<th style="color: white;">Editar</th>
	</tr>
	</tfoot>';
}
echo $tabla . $datosTabla . '</tbody>'.$tfooter.'</table>';
?>