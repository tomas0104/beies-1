<?php

require_once '../config/conexion.php';

class objetivo {

    public $cnx;

    public function __construct() {
        $this->cnx = conexion::conectar();
    }

    public function RegistrarObjetivo($dato) {
        $query = 'INSERT INTO objetivos(experiencia_ID, objetivo_general, objetivo_especifico1, objetivo_especifico2, '
                . 'objetivo_especifico3, objetivo_especifico4, descripcion_problema, solucion_problema, palabras_claves) '
                . 'VALUES (:experiencia_ID,:objetivo_general,:objetivo_especifico1,:objetivo_especifico2,'
                . ':objetivo_especifico3, :objetivo_especifico4,:descripcion_problema,:solucion_problema,:palabras_claves)';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':experiencia_ID', $dato['ID_experiencia'], PDO::PARAM_INT);
        $base->bindParam(':objetivo_general', $dato['Objetivo_General'], PDO::PARAM_STR);
        $base->bindParam(':objetivo_especifico1', $dato['Objetivo_especifico1'], PDO::PARAM_STR);
        $base->bindParam(':objetivo_especifico2', $dato['Objetivo_especifico2'], PDO::PARAM_STR);
        $base->bindParam(':objetivo_especifico3', $dato['Objetivo_especifico3'], PDO::PARAM_STR);
        $base->bindParam(':objetivo_especifico4', $dato['Objetivo_especifico4'], PDO::PARAM_STR);
        $base->bindParam(':descripcion_problema', $dato['Descripcion_problema'], PDO::PARAM_STR);
        $base->bindParam(':solucion_problema', $dato['Solucion_problema'], PDO::PARAM_STR);
        $base->bindParam(':palabras_claves', $dato['Palabras_claves'], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        $base->close();
        return false;
    }

    public function GetID($id) {
        $query = ("SELECT ID, experiencia_ID, objetivo_general, objetivo_especifico1, objetivo_especifico2, "
                . "objetivo_especifico3, objetivo_especifico4, descripcion_problema, solucion_problema, palabras_claves "
                . "FROM objetivos WHERE experiencia_ID = :ID");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":ID", $id, PDO::PARAM_INT);

        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function UpdateObjetivo($dato) {
        $query = 'UPDATE objetivos SET experiencia_ID = :experiencia_ID, objetivo_general = :objetivo_general,
                objetivo_especifico1 = :objetivo_especifico1, objetivo_especifico2 = :objetivo_especifico2, 
                objetivo_especifico3 = :objetivo_especifico3, objetivo_especifico4 = :objetivo_especifico4,
                descripcion_problema = :descripcion_problema, solucion_problema = :solucion_problema,
                palabras_claves = :palabras_claves WHERE ID = :ID';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':ID', $dato['ID_Objetivo'], PDO::PARAM_INT);
        $base->bindParam(':experiencia_ID', $dato['experienciaID'], PDO::PARAM_INT);
        $base->bindParam(':objetivo_general', $dato['Objetivo_General'], PDO::PARAM_STR);
        $base->bindParam(':objetivo_especifico1', $dato['Objetivo_especifico1'], PDO::PARAM_STR);
        $base->bindParam(':objetivo_especifico2', $dato['Objetivo_especifico2'], PDO::PARAM_STR);
        $base->bindParam(':objetivo_especifico3', $dato['Objetivo_especifico3'], PDO::PARAM_STR);
        $base->bindParam(':objetivo_especifico4', $dato['Objetivo_especifico4'], PDO::PARAM_STR);
        $base->bindParam(':descripcion_problema', $dato['Descripcion_problema'], PDO::PARAM_STR);
        $base->bindParam(':solucion_problema', $dato['Solucion_problema'], PDO::PARAM_STR);
        $base->bindParam(':palabras_claves', $dato['Palabras_claves'], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        $base->close();
        return false;
    }

}
