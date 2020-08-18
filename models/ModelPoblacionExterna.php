<?php

require_once '../config/conexion.php';

class PoblacionExterna {

    public $cnx;

    public function __construct() {
        $this->cnx = conexion::conectar();
    }

    public function Registrar($datos) {
        $query = ("INSERT INTO poblacion_externa (experiencia_ID, 
							   tipo_documento, 
							   numero_documento, 
							   nombres, 
							   apellidos, 
							   telefono, 
							   celular, 
							   direccion, 
							   correo, 
							   vinculacion_exp, 
							   grupo_etario, 
							   etnia_participante, 
							   tipologia_actividad, 
							   escola_1, 
							   escola_2, 
							   escola_3, 
							   escola_4, 
							   escola_5, 
							   escola_6, 
							   escola_7, 
							   escola_8, 
							   escola_9, 
							   participacion_1, 
							   participacion_2, 
							   participacion_3, 
							   participacion_4, 
							   participacion_5) 
			VALUES (:experiencia_ID, :tipo_documento, :numero_documento, :nombres, :apellidos, :telefono, :celular, :direccion, :correo, :vinculacion_exp, :grupo_etario, :etnia_participante, :tipologia_actividad, :escola_1, :escola_2, :escola_3, :escola_4, :escola_5, :escola_6, :escola_7, :escola_8, :escola_9, :participacion_1, :participacion_2, :participacion_3, :participacion_4, :participacion_5)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":experiencia_ID", $datos['ID'], PDO::PARAM_INT);
        $base->bindParam(":tipo_documento", $datos['TipoDocumento'], PDO::PARAM_STR);
        $base->bindParam(":numero_documento", $datos['NumeroDocumento'], PDO::PARAM_INT);
        $base->bindParam(":nombres", $datos['Nombres'], PDO::PARAM_STR);
        $base->bindParam(":apellidos", $datos['Apellidos'], PDO::PARAM_STR);
        $base->bindParam(":telefono", $datos['Telefono'], PDO::PARAM_STR);
        $base->bindParam(":celular", $datos['Celular'], PDO::PARAM_STR);
        $base->bindParam(":direccion", $datos['Direccion'], PDO::PARAM_STR);
        $base->bindParam(":correo", $datos['Correo'], PDO::PARAM_STR);
        $base->bindParam(":vinculacion_exp", $datos['VinculacionInstitucional'], PDO::PARAM_STR);
        $base->bindParam(":grupo_etario", $datos['GrupoEtario'], PDO::PARAM_STR);
        $base->bindParam(":etnia_participante", $datos['Etnia'], PDO::PARAM_STR);
        $base->bindParam(":tipologia_actividad", $datos['TipologiaActividad'], PDO::PARAM_STR);
        $base->bindParam(":escola_1", $datos['SinEscolaridad'], PDO::PARAM_INT);
        $base->bindParam(":escola_2", $datos['PrimariaIncompleta'], PDO::PARAM_INT);
        $base->bindParam(":escola_3", $datos['PrimariaCompleta'], PDO::PARAM_INT);
        $base->bindParam(":escola_4", $datos['BachilleratoIncompleto'], PDO::PARAM_INT);
        $base->bindParam(":escola_5", $datos['BachilleratoCompleto'], PDO::PARAM_INT);
        $base->bindParam(":escola_6", $datos['TecnicaCompleta'], PDO::PARAM_INT);
        $base->bindParam(":escola_7", $datos['TecnicaIncompleta'], PDO::PARAM_INT);
        $base->bindParam(":escola_8", $datos['Universidad'], PDO::PARAM_INT);
        $base->bindParam(":escola_9", $datos['Postgrado'], PDO::PARAM_INT);
        $base->bindParam(":participacion_1", $datos['Participacion1'], PDO::PARAM_STR);
        $base->bindParam(":participacion_2", $datos['Participacion2'], PDO::PARAM_STR);
        $base->bindParam(":participacion_3", $datos['Participacion3'], PDO::PARAM_STR);
        $base->bindParam(":participacion_4", $datos['Participacion4'], PDO::PARAM_STR);
        $base->bindParam(":participacion_5", $datos['Participacion5'], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        $base->close();
        return false;
    }

    public function GraficaPoblacion() {
        $query = ("SELECT COUNT(*) AS 'TotalPoblacion', pe.vinculacion_exp AS 'Vinculo'  FROM poblacion_externa pe GROUP BY pe.vinculacion_exp");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function GraficaFomento() {
        $query = ('SELECT COUNT(pe.participacion_1)AS Total, pe.participacion_1 AS Fomento FROM poblacion_externa pe GROUP BY pe.participacion_1');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function GraficaTipologia() {
        $query = ("SELECT COUNT(pe.tipologia_actividad) as Total, CASE pe.tipologia_actividad WHEN pe.tipologia_actividad = '' THEN SUBSTRING_INDEX(pe.tipologia_actividad , ' ', 15) ELSE 'NN'
	END AS Actividad FROM poblacion_externa pe GROUP BY pe.tipologia_actividad ORDER BY LENGTH(Actividad) ASC");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function GraficaEtnia() {
        $query = ("SELECT COUNT(pe.etnia_participante) as Total, 
	CASE pe.etnia_participante 
		WHEN pe.etnia_participante = '' THEN pe.etnia_participante
	ELSE 
		'No registra'
	END AS Etnia
        FROM poblacion_externa pe 
        GROUP BY pe.etnia_participante ORDER BY LENGTH(Etnia) ASC");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

}

?>