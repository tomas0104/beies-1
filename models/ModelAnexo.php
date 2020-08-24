<?php

require_once '../config/conexion.php';

class Anexo{
    
    public $cnx;
    
    public function __construct() {
        $this->cnx = conexion::conectar();
    }
    
    public function ListarAnexos(){
        $query = 'SELECT an.ID, ex.nombre_experiencia, an.nombre_archivo,  an.tipo_archivo, an.ruta_archivo FROM anexo_experiencia an INNER JOIN experiencia ex on an.experiencia_ID = ex.ID ';
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function GuardarRegistro($datos){
        $query = 'INSERT INTO anexo_experiencia (tipo_archivo, nombre_archivo, ruta_archivo, experiencia_ID) VALUES
                (:tipo_archivo, :nombre_archivo, :ruta_archivo, :experiencia_ID)';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':tipo_archivo', $datos['TipoArchivo'], PDO::PARAM_STR);
        $base->bindParam(':nombre_archivo', $datos['NombreArchivo'], PDO::PARAM_STR);
        $base->bindParam(':ruta_archivo', $datos['URL'], PDO::PARAM_STR);
        $base->bindParam(':experiencia_ID', $datos['ExperienciaID'], PDO::PARAM_INT);   
        if ($base->execute()) {
            return true;
        }
        return false;
        $base->close();
    }

    public function ObtenerNombre($id){
        $query = 'SELECT nombre_archivo FROM anexo_experiencia WHERE ID = :id';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':id', $id, PDO::PARAM_INT);
        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
        $base->close();
    }

    public function EliminarArchivo($id){
        $query = 'DELETE FROM anexo_experiencia WHERE ID = :id';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':id', $id, PDO::PARAM_INT);
        if ($base->execute()) {
            return true;
        }
        return false;
        $base->close();
    }
}

