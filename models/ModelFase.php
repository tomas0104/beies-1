<?php

require_once '../config/conexion.php';

class fase {

    public $cnx;

    public function __construct() {
        $this->cnx = conexion::conectar();
    }

    public function RegistrarFase($datos) {
        $query = "INSERT INTO fase_experiencia(id_experiencia, f1_nombre, f1_acciones, f1_resultados_esperado, 
                f1_indicadores_cumplimiento, f1_resultado_obtenido, f1_tiempo_empleado, f1_recurso_empleado, 
                f1_responsable, f1_metodo_seguimiento, f1_instrumento_verificacion, f2_nombre, f2_acciones, 
                f2_resultados_esperado, f2_indicadores_cumplimiento, f2_resultado_obtenido, f2_tiempo_empleado, 
                f2_recurso_empleado, f2_responsable, f2_metodo_seguimiento, f2_instrumento_verificacion, 
                f3_nombre, f3_acciones, f3_resultados_esperado, f3_indicadores_cumplimiento, f3_resultado_obtenido,
                f3_tiempo_empleado, f3_recurso_empleado, f3_responsable, f3_metodo_seguimiento, f3_instrumento_verificacion,
                f4_nombre, f4_acciones, f4_resultados_esperado, f4_indicadores_cumplimiento, f4_resultado_obtenido,
                f4_tiempo_empleado, f4_recurso_empleado, f4_responsable, f4_metodo_seguimiento, f4_instrumento_verificacion,
                f5_nombre, f5_acciones, f5_resultados_esperado, f5_indicadores_cumplimiento, f5_resultado_obtenido,
                f5_tiempo_empleado, f5_recurso_empleado, f5_responsable, f5_metodo_seguimiento, f5_instrumento_verificacion)
                
                VALUES (:id_experiencia, :f1_nombre, :f1_acciones, :f1_resultados_esperado, 
                :f1_indicadores_cumplimiento, :f1_resultado_obtenido, :f1_tiempo_empleado, :f1_recurso_empleado, 
                :f1_responsable, :f1_metodo_seguimiento, :f1_instrumento_verificacion, :f2_nombre, :f2_acciones, 
                :f2_resultados_esperado, :f2_indicadores_cumplimiento, :f2_resultado_obtenido, :f2_tiempo_empleado, 
                :f2_recurso_empleado, :f2_responsable, :f2_metodo_seguimiento, :f2_instrumento_verificacion, 
                :f3_nombre, :f3_acciones, :f3_resultados_esperado, :f3_indicadores_cumplimiento, :f3_resultado_obtenido,
                :f3_tiempo_empleado, :f3_recurso_empleado, :f3_responsable, :f3_metodo_seguimiento, :f3_instrumento_verificacion,
                :f4_nombre, :f4_acciones, :f4_resultados_esperado, :f4_indicadores_cumplimiento, :f4_resultado_obtenido,
                :f4_tiempo_empleado, :f4_recurso_empleado, :f4_responsable, :f4_metodo_seguimiento, :f4_instrumento_verificacion,
                :f5_nombre, :f5_acciones, :f5_resultados_esperado, :f5_indicadores_cumplimiento, :f5_resultado_obtenido,
                :f5_tiempo_empleado, :f5_recurso_empleado, :f5_responsable, :f5_metodo_seguimiento, :f5_instrumento_verificacion)";
        $base = $this->cnx->prepare($query);
        $base->bindParam(':id_experiencia', $datos['Experiencia_ID'], PDO::PARAM_INT);
        $base->bindParam(':f1_nombre', $datos['Nombre_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_acciones', $datos['Acciones_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_resultados_esperado', $datos['Resultados_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_indicadores_cumplimiento', $datos['Indicador_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_resultado_obtenido', $datos['Resultados_obtenidos_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_tiempo_empleado', $datos['Tiempo_empleado_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_recurso_empleado', $datos['Recursos_empleados_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_responsable', $datos['Responsable_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_metodo_seguimiento', $datos['Metodo_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_instrumento_verificacion', $datos['Instrumento_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f2_nombre', $datos['Nombre_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_acciones', $datos['Acciones_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_resultados_esperado', $datos['Resultados_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_indicadores_cumplimiento', $datos['Indicador_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_resultado_obtenido', $datos['Resultados_obtenidos_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_tiempo_empleado', $datos['Tiempo_empleado_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_recurso_empleado', $datos['Recursos_empleados_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_responsable', $datos['Responsable_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_metodo_seguimiento', $datos['Metodo_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_instrumento_verificacion', $datos['Instrumento_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f3_nombre', $datos['Nombre_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_acciones', $datos['Acciones_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_resultados_esperado', $datos['Resultados_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_indicadores_cumplimiento', $datos['Indicador_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_resultado_obtenido', $datos['Resultados_obtenidos_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_tiempo_empleado', $datos['Tiempo_empleado_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_recurso_empleado', $datos['Recursos_empleados_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_responsable', $datos['Responsable_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_metodo_seguimiento', $datos['Metodo_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_instrumento_verificacion', $datos['Instrumento_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f4_nombre', $datos['Nombre_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_acciones', $datos['Acciones_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_resultados_esperado', $datos['Resultados_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_indicadores_cumplimiento', $datos['Indicador_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_resultado_obtenido', $datos['Resultados_obtenidos_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_tiempo_empleado', $datos['Tiempo_empleado_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_recurso_empleado', $datos['Recursos_empleados_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_responsable', $datos['Responsable_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_metodo_seguimiento', $datos['Metodo_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_instrumento_verificacion', $datos['Instrumento_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f5_nombre', $datos['Nombre_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_acciones', $datos['Acciones_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_resultados_esperado', $datos['Resultados_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_indicadores_cumplimiento', $datos['Indicador_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_resultado_obtenido', $datos['Resultados_obtenidos_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_tiempo_empleado', $datos['Tiempo_empleado_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_recurso_empleado', $datos['Recursos_empleados_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_responsable', $datos['Responsable_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_metodo_seguimiento', $datos['Metodo_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_instrumento_verificacion', $datos['Instrumento_fase5'], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        $base->close();
        return false;
    }

    public function ActualizarFase($datos) {
        $query = "UPDATE  fase_experiencia  SET  id_experiencia = :id_experiencia, f1_nombre = :f1_nombre, "
                . "f1_acciones = :f1_acciones, f1_resultados_esperado = :f1_resultados_esperado, "
                . "f1_indicadores_cumplimiento = :f1_indicadores_cumplimiento, f1_resultado_obtenido = :f1_resultado_obtenido, "
                . "f1_tiempo_empleado = :f1_tiempo_empleado, f1_recurso_empleado = :f1_recurso_empleado, "
                . "f1_responsable = :f1_responsable, f1_metodo_seguimiento = :f1_metodo_seguimiento,"
                . "f1_instrumento_verificacion = :f1_instrumento_verificacion, f2_nombre = :f2_nombre, "
                . "f2_acciones = :f2_acciones, f2_resultados_esperado = :f2_resultados_esperado, "
                . "f2_indicadores_cumplimiento = :f2_indicadores_cumplimiento, f2_resultado_obtenido = :f2_resultado_obtenido, "
                . "f2_tiempo_empleado = :f2_tiempo_empleado, f2_recurso_empleado = :f2_recurso_empleado, f2_responsable = :f2_responsable, "
                . "f2_metodo_seguimiento = :f2_metodo_seguimiento, f2_instrumento_verificacion = :f2_instrumento_verificacion, f3_nombre = :f3_nombre, "
                . "f3_acciones = :f3_acciones, f3_resultados_esperado = :f3_resultados_esperado, f3_indicadores_cumplimiento = :f3_indicadores_cumplimiento,"
                . "f3_resultado_obtenido = :f3_resultado_obtenido, f3_tiempo_empleado = :f3_tiempo_empleado, f3_recurso_empleado = :f3_recurso_empleado, "
                . "f3_responsable = :f3_responsable, f3_metodo_seguimiento = :f3_metodo_seguimiento, f3_instrumento_verificacion = :f3_instrumento_verificacion, "
                . "f4_nombre = :f4_nombre, f4_acciones = :f4_acciones, f4_resultados_esperado = :f4_resultados_esperado, "
                . "f4_indicadores_cumplimiento = :f4_indicadores_cumplimiento, f4_resultado_obtenido = :f4_resultado_obtenido, "
                . "f4_tiempo_empleado = :f4_tiempo_empleado, f4_recurso_empleado = :f4_recurso_empleado, f4_responsable = :f4_responsable, "
                . "f4_metodo_seguimiento = :f4_metodo_seguimiento, f4_instrumento_verificacion = :f4_instrumento_verificacion, "
                . "f5_nombre = :f5_nombre, f5_acciones = :f5_acciones, f5_resultados_esperado = :f5_resultados_esperado, "
                . "f5_indicadores_cumplimiento = :f5_indicadores_cumplimiento, f5_resultado_obtenido = :f5_resultado_obtenido, "
                . "f5_tiempo_empleado = :f5_tiempo_empleado, f5_recurso_empleado = :f5_recurso_empleado, f5_responsable = :f5_responsable, "
                . "f5_metodo_seguimiento = :f5_metodo_seguimiento, f5_instrumento_verificacion = :f5_instrumento_verificacion WHERE ID = :ID";
        $base = $this->cnx->prepare($query);
        $base->bindParam(':ID', $datos['ID'], PDO::PARAM_INT);
        $base->bindParam(':id_experiencia', $datos['Experiencia_ID'], PDO::PARAM_INT);
        $base->bindParam(':f1_nombre', $datos['Nombre_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_acciones', $datos['Acciones_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_resultados_esperado', $datos['Resultados_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_indicadores_cumplimiento', $datos['Indicador_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_resultado_obtenido', $datos['Resultados_obtenidos_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_tiempo_empleado', $datos['Tiempo_empleado_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_recurso_empleado', $datos['Recursos_empleados_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_responsable', $datos['Responsable_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_metodo_seguimiento', $datos['Metodo_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f1_instrumento_verificacion', $datos['Instrumento_fase1'], PDO::PARAM_STR);
        $base->bindParam(':f2_nombre', $datos['Nombre_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_acciones', $datos['Acciones_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_resultados_esperado', $datos['Resultados_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_indicadores_cumplimiento', $datos['Indicador_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_resultado_obtenido', $datos['Resultados_obtenidos_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_tiempo_empleado', $datos['Tiempo_empleado_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_recurso_empleado', $datos['Recursos_empleados_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_responsable', $datos['Responsable_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_metodo_seguimiento', $datos['Metodo_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f2_instrumento_verificacion', $datos['Instrumento_fase2'], PDO::PARAM_STR);
        $base->bindParam(':f3_nombre', $datos['Nombre_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_acciones', $datos['Acciones_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_resultados_esperado', $datos['Resultados_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_indicadores_cumplimiento', $datos['Indicador_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_resultado_obtenido', $datos['Resultados_obtenidos_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_tiempo_empleado', $datos['Tiempo_empleado_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_recurso_empleado', $datos['Recursos_empleados_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_responsable', $datos['Responsable_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_metodo_seguimiento', $datos['Metodo_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f3_instrumento_verificacion', $datos['Instrumento_fase3'], PDO::PARAM_STR);
        $base->bindParam(':f4_nombre', $datos['Nombre_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_acciones', $datos['Acciones_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_resultados_esperado', $datos['Resultados_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_indicadores_cumplimiento', $datos['Indicador_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_resultado_obtenido', $datos['Resultados_obtenidos_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_tiempo_empleado', $datos['Tiempo_empleado_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_recurso_empleado', $datos['Recursos_empleados_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_responsable', $datos['Responsable_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_metodo_seguimiento', $datos['Metodo_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f4_instrumento_verificacion', $datos['Instrumento_fase4'], PDO::PARAM_STR);
        $base->bindParam(':f5_nombre', $datos['Nombre_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_acciones', $datos['Acciones_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_resultados_esperado', $datos['Resultados_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_indicadores_cumplimiento', $datos['Indicador_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_resultado_obtenido', $datos['Resultados_obtenidos_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_tiempo_empleado', $datos['Tiempo_empleado_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_recurso_empleado', $datos['Recursos_empleados_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_responsable', $datos['Responsable_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_metodo_seguimiento', $datos['Metodo_fase5'], PDO::PARAM_STR);
        $base->bindParam(':f5_instrumento_verificacion', $datos['Instrumento_fase5'], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        $base->close();
        return false;
    }

    public function ObtenerID($id) {
        $query = ("SELECT ID, id_experiencia, f1_nombre, f1_acciones, f1_resultados_esperado, f1_indicadores_cumplimiento, "
                . "f1_resultado_obtenido, f1_tiempo_empleado, f1_recurso_empleado, f1_responsable, f1_metodo_seguimiento, "
                . "f1_instrumento_verificacion, f2_nombre, f2_acciones, f2_resultados_esperado, f2_indicadores_cumplimiento, "
                . "f2_resultado_obtenido, f2_tiempo_empleado, f2_recurso_empleado, f2_responsable, f2_metodo_seguimiento, "
                . "f2_instrumento_verificacion, f3_nombre, f3_acciones, f3_resultados_esperado, f3_indicadores_cumplimiento, "
                . "f3_resultado_obtenido, f3_tiempo_empleado, f3_recurso_empleado, f3_responsable, f3_metodo_seguimiento, "
                . "f3_instrumento_verificacion, f4_nombre, f4_acciones, f4_resultados_esperado, f4_indicadores_cumplimiento, "
                . "f4_resultado_obtenido, f4_tiempo_empleado, f4_recurso_empleado, f4_responsable, f4_metodo_seguimiento, "
                . "f4_instrumento_verificacion, f5_nombre, f5_acciones, f5_resultados_esperado, f5_indicadores_cumplimiento, "
                . "f5_resultado_obtenido, f5_tiempo_empleado, f5_recurso_empleado, f5_responsable, f5_metodo_seguimiento, "
                . "f5_instrumento_verificacion FROM fase_experiencia WHERE id_experiencia = :ID");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":ID", $id, PDO::PARAM_INT);

        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }

    public function ReporteFase($idExperiencia){
        $query = 'SELECT EX.nombre_experiencia, FE.f1_nombre, FE.f1_acciones, FE.f1_resultados_esperado, FE.f1_indicadores_cumplimiento, FE.f1_resultado_obtenido, FE.f1_tiempo_empleado, FE.f1_recurso_empleado, FE.f1_responsable, FE.f1_metodo_seguimiento, FE.f1_instrumento_verificacion, FE.f2_nombre, FE.f2_acciones, FE.f2_resultados_esperado, FE.f2_indicadores_cumplimiento, FE.f2_resultado_obtenido, FE.f2_tiempo_empleado, FE.f2_recurso_empleado, FE.f2_responsable, FE.f2_metodo_seguimiento, FE.f2_instrumento_verificacion, FE.f3_nombre, FE.f3_acciones, FE.f3_resultados_esperado, FE.f3_indicadores_cumplimiento, FE.f3_resultado_obtenido, FE.f3_tiempo_empleado, FE.f3_recurso_empleado, FE.f3_responsable, FE.f3_metodo_seguimiento, FE.f3_instrumento_verificacion, FE.f4_nombre, FE.f4_acciones, FE.f4_resultados_esperado, FE.f4_indicadores_cumplimiento, FE.f4_resultado_obtenido, FE.f4_tiempo_empleado, FE.f4_recurso_empleado, FE.f4_responsable, FE.f4_metodo_seguimiento, FE.f4_instrumento_verificacion, FE.f5_nombre, FE.f5_acciones, FE.f5_resultados_esperado, FE.f5_indicadores_cumplimiento, FE.f5_resultado_obtenido, FE.f5_tiempo_empleado, FE.f5_recurso_empleado, FE.f5_responsable, FE.f5_metodo_seguimiento, FE.f5_instrumento_verificacion 
            FROM fase_experiencia FE INNER JOIN experiencia EX ON FE.id_experiencia = EX.ID WHERE FE.id_experiencia  = :idExperiencia';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':idExperiencia', $idExperiencia, PDO::PARAM_INT);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

}

?>
