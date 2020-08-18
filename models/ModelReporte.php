<?php 
require_once '../config/conexion.php';

class Reporte{

	public $cnx;

	public function __construct(){
		$this->cnx = conexion::conectar();
	}


	public function SelectPoblacionU($id){
		$query = ("select pu.tipo_documento, pu.numero_documento, pu.codigo_universidad, pu.nombres, 
			pu.apellidos, pu.telefono, pu.celular, pu.correo, pu.vinculacion_experiencia,
			pu.vinculacion_universidad, pu.sede, pu.facultad, pu.programa, pu.horas, pu.tipologia_actividad
			from poblacion_universitaria pu inner join experiencia exp on pu.experiencia_ID = exp.ID where exp.ID = :ID");
		$base = $this->cnx->prepare($query);
		$base->bindParam(":ID", $id, PDO::PARAM_INT);

		if ($base->execute()) {
			return $base->fetchALL(PDO::FETCH_ASSOC);
		}
		return false;
		$base->close();

	}

	public function SelectPoblacionE($id){
		$query = ("select pe.tipo_documento, pe.numero_documento, pe.nombres, pe.apellidos, pe.telefono, pe.celular, pe.direccion, pe.correo, pe.vinculacion_exp, pe.grupo_etario,
			pe.etnia_participante, pe.tipologia_actividad, pe.escola_1, pe.escola_2, pe.escola_3, pe.escola_4, pe.escola_5, pe.escola_6, pe.escola_7, pe.escola_8,
			pe.escola_9, pe.participacion_1, pe.participacion_2, pe.participacion_3, pe.participacion_4, pe.participacion_5
			from poblacion_externa pe inner join experiencia exp on pe.experiencia_ID = exp.ID where exp.ID = :ID");
		$base = $this->cnx->prepare($query);
		$base->bindParam(":ID", $id, PDO::PARAM_INT);

		if ($base->execute()) {
			return $base->fetchALL(PDO::FETCH_ASSOC);
		}
		return false;
		$base->close();

	}

	public function SelectOrganizacionE($id){
		$query = ("select oe.tipo_documento, oe.numero, oe.departamento, oe.municipio, oe.municipio, oe.telefono, oe.celular, oe.direccion, oe.correo,
			oe.sector_publico, oe.sector_educativo, oe.sector_ss, oe.sector_sc, oe.sector_ir, oe.sector_sp
			from organizacion_externa oe inner join experiencia exp on oe.experiencia_ID = exp.ID where exp.ID = :ID");
		$base = $this->cnx->prepare($query);
		$base->bindParam(":ID", $id, PDO::PARAM_INT);

		if ($base->execute()) {
			return $base->fetchALL(PDO::FETCH_ASSOC);
		}
		return false;
		$base->close();

	}


	public function SelectExperiencia($id){
		$query = ("select exp.nombre_experiencia, exp.categoria_experiencia, exp.sede, exp.area_involucrada, exp.fecha_inicio, exp.comp_inter, exp.relacion_inves_proyeccion, 
			exp.ambito_resp_social, exp.dificultades_desarrollo_practica, exp.recursos_invertido_tiempo, exp.recursos_invertido_talento, exp.recursos_invertido_financiero, 
			exp.recursos_invertido_tecnicos, exp.espacios_involucrados,  exp.expectativa_continuidad, exp.estado_evaluacion, 
			exp.innovacion_multidisciplinar, exp.innovacion_tic, exp.innovacion_interdisciplinario, exp.innovacion_interinstitucional, exp.innovacion_nuevo_desarrollo, 
			exp.innovacion_transferencia, exp.innovacion_inclusion, exp.innovacion_otro, exp.evaluacion_formato, exp.evaluacion_cuestionario, exp.evaluacion_entrevista, 
			exp.evaluacion_focus_group, exp.evaluacion_visita, exp.evaluacion_externa, exp.evaluacion_otro, exp.nivel_territorial, exp.ubicacion_geografica,
			exp.relacion_universidad_actor, exp.resultados_esperados, exp.pertenencia_territorial1, exp.opcion_si_pertenencia1, exp.pertenencia_territorial2, 
			exp.opcion_si_pertenencia2, exp.pertenencia_territorial3, exp.participacion_economica_5, exp.participacion_plan_local1, exp.participacion_plan_local2, exp.participacion_plan_local3, exp.timestamp as 'FechaRegistro'
			from experiencia exp
			where exp.ID = :ID");
		$base = $this->cnx->prepare($query);
		$base->bindParam(":ID", $id, PDO::PARAM_INT);

		if ($base->execute()) {
			return $base->fetchALL(PDO::FETCH_ASSOC);
		}
		return false;
		$base->close();

	}

}
