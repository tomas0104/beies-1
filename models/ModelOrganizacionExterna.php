<?php

require_once '../config/conexion.php';

class ModelOrganizacion {

    public $cnx;

    public function __construct() {
        $this->cnx = conexion::conectar();
    }

    public function RegistrarOrganizacion($datos) {
        $query = ("INSERT INTO organizacion_externa (experiencia_ID, tipo_documento, numero, nombre, departamento, "
                . "municipio, telefono, celular, direccion, correo, sector_publico, sector_educativo, sector_ss, "
                . "sector_sc, sector_ir, sector_sp) VALUES (:experiencia_ID, :tipo_documento, :numero,"
                . " :nombre, :departamento, :municipio, :telefono, :celular, :direccion, :correo, :sector_publico,"
                . " :sector_educativo, :sector_ss, :sector_sc, :sector_ir, :sector_sp)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":experiencia_ID", $datos['ID'], PDO::PARAM_INT);
        $base->bindParam(":tipo_documento", $datos['TipoDocumento'], PDO::PARAM_STR);
        $base->bindParam(":numero", $datos['NumeroDocumento'], PDO::PARAM_INT);
        $base->bindParam(":nombre", $datos['Nombre'], PDO::PARAM_STR);
        $base->bindParam(":telefono", $datos['Telefono'], PDO::PARAM_STR);
        $base->bindParam(":departamento", $datos['Departamento'], PDO::PARAM_STR);
        $base->bindParam(":municipio", $datos['Municipio'], PDO::PARAM_STR);
        $base->bindParam(":celular", $datos['Celular'], PDO::PARAM_STR);
        $base->bindParam(":direccion", $datos['Direccion'], PDO::PARAM_STR);
        $base->bindParam(":correo", $datos['Correo'], PDO::PARAM_STR);
        $base->bindParam(":sector_publico", $datos['SectorPublico'], PDO::PARAM_STR);
        $base->bindParam(":sector_educativo", $datos['SectorEducativo'], PDO::PARAM_STR);
        $base->bindParam(":sector_ss", $datos['SectorEcosol'], PDO::PARAM_STR);
        $base->bindParam(":sector_sc", $datos['SectorSociedadCivil'], PDO::PARAM_STR);
        $base->bindParam(":sector_ir", $datos['SectorIntegracionRedes'], PDO::PARAM_STR);
        $base->bindParam(":sector_sp", $datos['SectorPrivado'], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        $base->close();
        return false;
    }

    public function SelectDepartamento() {
        $query = ("SELECT id, nombre  FROM departamentos");
        $base = $this->cnx->prepare($query);

        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function SelectMunicipio($departamento) {
        $query = ("SELECT id, nombre FROM municipios WHERE departamento_id = :departamento_id");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":departamento_id", $departamento, PDO::PARAM_INT);

        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function GraficaSectorPublico() {
        $query = ("SELECT COUNT(oe.sector_publico) AS 'TotalPublico',  oe.sector_publico AS 'SectorPublico' "
                . "FROM organizacion_externa oe  "
                . "WHERE oe.sector_publico != '' GROUP BY oe.sector_publico");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function GraficaSectorEducativo() {
        $query = ('SELECT COUNT(oe.sector_educativo) as Total, '
                . 'CASE oe.sector_educativo WHEN oe.sector_educativo = "" THEN oe.sector_educativo '
                . 'ELSE "NN" END AS Educativo FROM organizacion_externa oe '
                . 'GROUP BY oe.sector_educativo ORDER BY LENGTH(Educativo) ASC ');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }
    
    public function GraficaEconomiaSolidaria() {
        $query = ('SELECT COUNT(oe.sector_ss) as Total, '
                . 'CASE oe.sector_ss WHEN oe.sector_ss = "" THEN oe.sector_ss ELSE "NN" END AS Economia '
                . 'FROM organizacion_externa oe GROUP BY oe.sector_ss '
                . 'ORDER BY LENGTH(Economia) ASC ');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }
    
    public function GraficaSociedadCivil() {
        $query = ('SELECT COUNT(oe.sector_sc) as Total, '
                . 'CASE oe.sector_sc WHEN oe.sector_sc = "" THEN oe.sector_sc ELSE "NN" END AS Sociedad '
                . 'FROM organizacion_externa oe GROUP BY oe.sector_sc ORDER BY LENGTH(Sociedad) ASC ');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }
    
    public function GraficaIntegracion() {
        $query = ('SELECT COUNT(oe.sector_ir) as Total, '
                . 'CASE oe.sector_ir WHEN oe.sector_ir = "" THEN oe.sector_ir ELSE "NN" END AS Integracion '
                . 'FROM organizacion_externa oe GROUP BY oe.sector_ir ');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }
    
    public function GraficaPrivado() {
        $query = ('SELECT COUNT(oe.sector_sp) as Total, '
                . 'CASE oe.sector_sp WHEN oe.sector_sp = "" THEN oe.sector_sp ELSE "NN" END AS Privado '
                . 'FROM organizacion_externa oe GROUP BY oe.sector_sp ');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }
}

?>