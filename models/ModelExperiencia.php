<?php

require_once '../config/conexion.php';

class experiencia {

    public $cnx;

    public function __construct() {
        $this->cnx = conexion::conectar();
    }

    //Funcion para listar experiencias en gestion de experiencias
    public function ListarExperiencia($sede) {
        $query = ('SELECT ex.ID, ex.nombre_experiencia, ex.categoria_experiencia, ex.area_involucrada, ex.estado, ex.timestamp FROM experiencia ex WHERE ex.sede = :sede');
        $base = $this->cnx->prepare($query);
        $base->bindParam(':sede', $sede, PDO::PARAM_STR);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    //Funcion para crear grafica totl sede x experiencia
    public function GraficaInicial() {
        $query = ("SELECT COUNT(ex.sede) AS 'Total', ex.sede FROM experiencia ex GROUP BY ex.sede");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    //Funcion para crear grafica por nivel territorial
    public function NivelTerritorial() {
        $query = ('SELECT COUNT(ex.nivel_territorial) AS Total, ex.nivel_territorial AS Nivel from experiencia ex GROUP BY ex.nivel_territorial');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    //Funcion para crear grafica por ambito de responsabilidad
    public function Ambito() {
        $query = ('SELECT COUNT(ex.ambito_resp_social) AS TotalAmbito, ex.ambito_resp_social AS Ambito FROM experiencia ex GROUP BY ex.ambito_resp_social');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function GraficaCategoria() {
        $query = ('SELECT COUNT(ex.categoria_experiencia) AS Total, ex.categoria_experiencia AS Categoria FROM experiencia ex GROUP BY ex.categoria_experiencia');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function GraficaAreas() {
        $query = ('SELECT COUNT(ex.area_involucrada) AS Total, ex.area_involucrada AS Area FROM experiencia ex GROUP BY ex.area_involucrada');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function GraficaFomento() {
        $query = ('SELECT COUNT(ex.participacion_economica_5) AS Total, ex.participacion_economica_5 AS Fomento FROM experiencia ex GROUP BY ex.participacion_economica_5');
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    //Funcion para registrar las experiecias
    public function Registrar_Experiencia($datos) {
        $query = ("INSERT INTO experiencia
         (nombre_experiencia, categoria_experiencia, sede, area_involucrada, fecha_inicio, 
         comp_inter, desc_componente, relacion_inves_proyeccion, desc_inves_proyecccion, ambito_resp_social,
         dificultades_desarrollo_practica, recursos_invertido_tiempo, recursos_invertido_talento,
         recursos_invertido_financiero, recursos_invertido_tecnicos, espacios_involucrados,
         expectativa_continuidad, desc_continuidad, estado_evaluacion,
         innovacion_multidisciplinar, innovacion_tic, innovacion_interdisciplinario
         ,innovacion_interinstitucional, innovacion_nuevo_desarrollo, innovacion_transferencia,
         innovacion_inclusion, innovacion_otro, evaluacion_formato, evaluacion_cuestionario,
         evaluacion_entrevista, evaluacion_focus_group, evaluacion_visita, evaluacion_externa,
         evaluacion_otro, nivel_territorial, ubicacion_geografica, relacion_universidad_actor, desc_relacion_uniactor,
         resultados_esperados, pertenencia_territorial1, opcion_si_pertenencia1,
         pertenencia_territorial2, opcion_si_pertenencia2, pertenencia_territorial3
         ,participacion_economica_5, participacion_plan_local1, participacion_plan_local2,
         participacion_plan_local3)
         VALUES(
         :nombre_experiencia, :categoria_experiencia, :sede, :area_involucrada, :fecha_inicio,
         :comp_inter, :desc_componente, :relacion_inves_proyeccion, :desc_inves_proyecccion, :ambito_resp_social,
         :dificultades_desarrollo_practica, :recursos_invertido_tiempo, :recursos_invertido_talento,
         :recursos_invertido_financiero,
         :recursos_invertido_tecnicos, :espacios_involucrados,
         :expectativa_continuidad, :desc_continuidad, :estado_evaluacion, :innovacion_multidisciplinar,
         :innovacion_tic, :innovacion_interdisciplinario, :innovacion_interinstitucional,
         :innovacion_nuevo_desarrollo, :innovacion_transferencia, :innovacion_inclusion,
         :innovacion_otro, :evaluacion_formato, :evaluacion_cuestionario, :evaluacion_entrevista,
         :evaluacion_focus_group, :evaluacion_visita, :evaluacion_externa, :evaluacion_otro,
         :nivel_territorial, :ubicacion_geografica, :relacion_universidad_actor, :desc_relacion_uniactor,
         :resultados_esperados, :pertenencia_territorial1, :opcion_si_pertenencia1,
         :pertenencia_territorial2, :opcion_si_pertenencia2, :pertenencia_territorial3,
         :participacion_economica_5, :participacion_plan_local1, :participacion_plan_local2,
         :participacion_plan_local3)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":nombre_experiencia", $datos['Nombre_categoria'], PDO::PARAM_STR);
        $base->bindParam(":categoria_experiencia", $datos['Categoria'], PDO::PARAM_STR);
        $base->bindParam(":sede", $datos['Sede'], PDO::PARAM_STR);
        $base->bindParam(":area_involucrada", $datos['Areas'], PDO::PARAM_STR);
        $base->bindParam(":fecha_inicio", $datos['Fecha_inicio'], PDO::PARAM_STR);
        $base->bindParam(":comp_inter", $datos['Componente_internacionalizacion'], PDO::PARAM_STR);
        $base->bindParam(":desc_componente", $datos['Descripcion_componente'], PDO::PARAM_STR);
        $base->bindParam(":relacion_inves_proyeccion", $datos['Integracion'], PDO::PARAM_STR);
        $base->bindParam(":desc_inves_proyecccion", $datos['Descripcion_integracion'], PDO::PARAM_STR);
        $base->bindParam(":ambito_resp_social", $datos['Ambito'], PDO::PARAM_STR);
        $base->bindParam(":dificultades_desarrollo_practica", $datos['Dificultad'], PDO::PARAM_STR);
        $base->bindParam(":recursos_invertido_tiempo", $datos['Recurso_tiemporecurso'], PDO::PARAM_STR);
        $base->bindParam(":recursos_invertido_talento", $datos['Recurso_talentoempresarial'], PDO::PARAM_STR);
        $base->bindParam(":recursos_invertido_financiero", $datos['Recurso_recursofinanciero'], PDO::PARAM_STR);
        $base->bindParam(":recursos_invertido_tecnicos", $datos['Recurso_recursotecnico'], PDO::PARAM_STR);
        $base->bindParam(":espacios_involucrados", $datos['Espacios_utilizados'], PDO::PARAM_STR);
        $base->bindParam(":expectativa_continuidad", $datos['Expectativa'], PDO::PARAM_STR);
        $base->bindParam(":desc_continuidad", $datos['Descripcion_expectativa'], PDO::PARAM_STR);
        $base->bindParam(":estado_evaluacion", $datos['Estado_evaluacion'], PDO::PARAM_STR);
        $base->bindParam(":innovacion_multidisciplinar", $datos['Componente_multidisciplinar'], PDO::PARAM_STR);
        $base->bindParam(":innovacion_tic", $datos['Componente_tics'], PDO::PARAM_STR);
        $base->bindParam(":innovacion_interdisciplinario", $datos['Componente_interdisciplinario'], PDO::PARAM_STR);
        $base->bindParam(":innovacion_interinstitucional", $datos['Componente_trabajointerinstitucional'], PDO::PARAM_STR);
        $base->bindParam(":innovacion_nuevo_desarrollo", $datos['Componente_nuevodesarrollo'], PDO::PARAM_STR);
        $base->bindParam(":innovacion_transferencia", $datos['Componente_transferencia'], PDO::PARAM_STR);
        $base->bindParam(":innovacion_inclusion", $datos['Componente_inclusion'], PDO::PARAM_STR);
        $base->bindParam(":innovacion_otro", $datos['Componente_otro'], PDO::PARAM_STR);
        $base->bindParam(":evaluacion_formato", $datos['Descripcion_formato'], PDO::PARAM_STR);
        $base->bindParam(":evaluacion_cuestionario", $datos['Descripcion_cuestionario'], PDO::PARAM_STR);
        $base->bindParam(":evaluacion_entrevista", $datos['Descripcion_entrevista'], PDO::PARAM_STR);
        $base->bindParam(":evaluacion_focus_group", $datos['Descripcion_focusgroup'], PDO::PARAM_STR);
        $base->bindParam(":evaluacion_visita", $datos['Descripcion_visitacampo'], PDO::PARAM_STR);
        $base->bindParam(":evaluacion_externa", $datos['Descripcion_evaluacionexterna'], PDO::PARAM_STR);
        $base->bindParam(":evaluacion_otro", $datos['Descripcion_otroespecifique'], PDO::PARAM_STR);
        $base->bindParam(":nivel_territorial", $datos['Nivel_territorial'], PDO::PARAM_STR);
        $base->bindParam(":ubicacion_geografica", $datos['Ubicacion_geografica'], PDO::PARAM_STR);
        $base->bindParam(":relacion_universidad_actor", $datos['Relacion_universidadactor'], PDO::PARAM_STR);
        $base->bindParam(":desc_relacion_uniactor", $datos['Descripcion_universidadactor'], PDO::PARAM_STR);
        $base->bindParam(":resultados_esperados", $datos['Resultados_esperados'], PDO::PARAM_STR);
        $base->bindParam(":pertenencia_territorial1", $datos['Conocimiento_dinamicas'], PDO::PARAM_STR);
        $base->bindParam(":opcion_si_pertenencia1", $datos['Opcion_vinculoredes'], PDO::PARAM_STR);
        $base->bindParam(":pertenencia_territorial2", $datos['Vinculo_redes'], PDO::PARAM_STR);
        $base->bindParam(":opcion_si_pertenencia2", $datos['Opcion_pertenece'], PDO::PARAM_STR);
        $base->bindParam(":pertenencia_territorial3", $datos['Cual_pertenece'], PDO::PARAM_STR);
        $base->bindParam(":participacion_economica_5", $datos['Fomento_economico'], PDO::PARAM_STR);
        $base->bindParam(":participacion_plan_local1", $datos['Participacion_publico'], PDO::PARAM_STR);
        $base->bindParam(":participacion_plan_local2", $datos['Relacion_instituciones'], PDO::PARAM_STR);
        $base->bindParam(":participacion_plan_local3", $datos['Plan_desarrollo'], PDO::PARAM_STR);
        if ($base->execute()) {
            return true;
        }
        return false;
        $base->close();
    }

    public function ObtenerID($id) {
        $query = 'SELECT exp.ID, exp.nombre_experiencia, exp.categoria_experiencia, exp.sede,
        exp.area_involucrada, exp.fecha_inicio, exp.comp_inter, exp.desc_componente, 
        exp.relacion_inves_proyeccion,exp.desc_inves_proyecccion,
        exp.ambito_resp_social, exp.dificultades_desarrollo_practica, exp.recursos_invertido_tiempo,
        exp.recursos_invertido_talento, exp.recursos_invertido_financiero, exp.recursos_invertido_tecnicos,
        exp.espacios_involucrados, exp.expectativa_continuidad, exp.desc_continuidad, exp.estado_evaluacion, 
        exp.innovacion_multidisciplinar, exp.innovacion_tic, exp.innovacion_interdisciplinario, 
        exp.innovacion_interinstitucional, exp.innovacion_nuevo_desarrollo, exp.innovacion_transferencia, 
        exp.innovacion_inclusion, exp.innovacion_otro, exp.evaluacion_formato, exp.evaluacion_cuestionario, 
        exp.evaluacion_entrevista, exp.evaluacion_focus_group, exp.evaluacion_visita, exp.evaluacion_externa, 
        exp.evaluacion_otro, exp.nivel_territorial, exp.ubicacion_geografica, exp.relacion_universidad_actor,
        exp.desc_relacion_uniactor, exp.resultados_esperados, exp.pertenencia_territorial1, exp.opcion_si_pertenencia1, 
        exp.pertenencia_territorial2, exp.opcion_si_pertenencia2, exp.pertenencia_territorial3, exp.participacion_economica_5,
        exp.participacion_plan_local1, exp.participacion_plan_local2, exp.participacion_plan_local3 
        FROM experiencia exp WHERE exp.ID = :id';
        $base = $this->cnx->prepare($query);
        $base->bindParam(":id", $id, PDO::PARAM_INT);
        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }

    public function ActualizarExperiencia($datos){
        $query = 'UPDATE  experiencia SET nombre_experiencia = :nombre_experiencia, categoria_experiencia = :categoria_experiencia,
        sede = :sede, area_involucrada = :area_involucrada, fecha_inicio = :fecha_inicio, comp_inter = :comp_inter, desc_componente = :desc_componente,
        relacion_inves_proyeccion = :relacion_inves_proyeccion, desc_inves_proyecccion = :desc_inves_proyecccion, ambito_resp_social = :ambito_resp_social,
        dificultades_desarrollo_practica = :dificultades_desarrollo_practica, recursos_invertido_tiempo = :recursos_invertido_tiempo,
        recursos_invertido_talento = :recursos_invertido_talento, recursos_invertido_financiero = :recursos_invertido_financiero,
        recursos_invertido_tecnicos = :recursos_invertido_tecnicos, espacios_involucrados = :espacios_involucrados, expectativa_continuidad = :expectativa_continuidad,
        desc_continuidad = :desc_continuidad, estado_evaluacion = :estado_evaluacion, innovacion_multidisciplinar = :innovacion_multidisciplinar,
        innovacion_tic = :innovacion_tic, innovacion_interdisciplinario = :innovacion_interdisciplinario, innovacion_interinstitucional = :innovacion_interinstitucional,
        innovacion_nuevo_desarrollo = :innovacion_nuevo_desarrollo, innovacion_transferencia = :innovacion_transferencia, innovacion_inclusion = :innovacion_inclusion,
        innovacion_otro = :innovacion_otro, evaluacion_formato = :evaluacion_formato, evaluacion_cuestionario = :evaluacion_cuestionario,
        evaluacion_entrevista = :evaluacion_entrevista, evaluacion_focus_group = :evaluacion_focus_group, evaluacion_visita = :evaluacion_visita,
        evaluacion_externa = :evaluacion_externa, evaluacion_otro = :evaluacion_otro, nivel_territorial = :nivel_territorial, ubicacion_geografica = :ubicacion_geografica,
        relacion_universidad_actor = :relacion_universidad_actor, desc_relacion_uniactor = :desc_relacion_uniactor, resultados_esperados = :resultados_esperados,
        pertenencia_territorial1 = :pertenencia_territorial1, opcion_si_pertenencia1 = :opcion_si_pertenencia1, pertenencia_territorial2 = :pertenencia_territorial2,
        opcion_si_pertenencia2 = :opcion_si_pertenencia2, pertenencia_territorial3 = :pertenencia_territorial3, participacion_economica_5 = :participacion_economica_5,
        participacion_plan_local1 = :participacion_plan_local1, participacion_plan_local2 = :participacion_plan_local2, participacion_plan_local3 = :participacion_plan_local3
        WHERE ID = :id';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':id', $datos['ID'], PDO::PARAM_INT );
        $base->bindParam(':nombre_experiencia', $datos['NombreExperiencia'], PDO::PARAM_STR);
        $base->bindParam(':categoria_experiencia', $datos['CategoriaExperiencia'], PDO::PARAM_STR);
        $base->bindParam(':sede', $datos['Sede'], PDO::PARAM_STR);
        $base->bindParam(':area_involucrada', $datos['Areas'], PDO::PARAM_STR);
        $base->bindParam(':fecha_inicio', $datos['FechaInicio'], PDO::PARAM_STR);
        $base->bindParam(':comp_inter', $datos['ComponenteInternacionalizacion'], PDO::PARAM_STR);
        $base->bindParam(':desc_componente', $datos['DescripcionComponente'], PDO::PARAM_STR);
        $base->bindParam(':relacion_inves_proyeccion', $datos['Integracion'], PDO::PARAM_STR);
        $base->bindParam(':desc_inves_proyecccion', $datos['DescripcionIntegracion'], PDO::PARAM_STR);
        $base->bindParam(':ambito_resp_social', $datos['Ambito'], PDO::PARAM_STR);
        $base->bindParam(':dificultades_desarrollo_practica', $datos['Dificultad'], PDO::PARAM_STR);
        $base->bindParam(':recursos_invertido_tiempo', $datos['RecursoTiempo'], PDO::PARAM_STR);
        $base->bindParam(':recursos_invertido_talento', $datos['RecursoTalento'], PDO::PARAM_STR);
        $base->bindParam(':recursos_invertido_financiero', $datos['RecursoFinanciero'], PDO::PARAM_STR);
        $base->bindParam(':recursos_invertido_tecnicos', $datos['RecursoTecnico'], PDO::PARAM_STR);
        $base->bindParam(':espacios_involucrados', $datos['EspaciosInvolucrados'], PDO::PARAM_STR);
        $base->bindParam(':expectativa_continuidad', $datos['ExpectativaContinuidad'], PDO::PARAM_STR);
        $base->bindParam(':desc_continuidad', $datos['DescripcionExpectativa'], PDO::PARAM_STR);
        $base->bindParam(':estado_evaluacion', $datos['EstadoEvaluacion'], PDO::PARAM_STR);
        $base->bindParam(':innovacion_multidisciplinar', $datos['ComponenteMultidisciplinar'], PDO::PARAM_STR);
        $base->bindParam(':innovacion_tic', $datos['ComponenteTic'], PDO::PARAM_STR);
        $base->bindParam(':innovacion_interdisciplinario', $datos['ComponenteInterdisciplinario'], PDO::PARAM_STR);
        $base->bindParam(':innovacion_interinstitucional', $datos['ComponenteInterinstitucional'], PDO::PARAM_STR);
        $base->bindParam(':innovacion_nuevo_desarrollo', $datos['ComponenteTecnologico'], PDO::PARAM_STR);
        $base->bindParam(':innovacion_transferencia', $datos['ComponenteTransferencia'], PDO::PARAM_STR);
        $base->bindParam(':innovacion_inclusion', $datos['ComponenteInclusion'], PDO::PARAM_STR);
        $base->bindParam(':innovacion_otro', $datos['ComponenteOtro'], PDO::PARAM_STR);
        $base->bindParam(':evaluacion_formato', $datos['Formatos'], PDO::PARAM_STR);
        $base->bindParam(':evaluacion_cuestionario', $datos['Cuestionarios'], PDO::PARAM_STR);
        $base->bindParam(':evaluacion_entrevista', $datos['Entrevistas'], PDO::PARAM_STR);
        $base->bindParam(':evaluacion_focus_group', $datos['FocusGroup'], PDO::PARAM_STR);
        $base->bindParam(':evaluacion_visita', $datos['Visitas'], PDO::PARAM_STR);
        $base->bindParam(':evaluacion_externa', $datos['Evaluaciones'], PDO::PARAM_STR);
        $base->bindParam(':evaluacion_otro', $datos['OtroEvaluaciones'], PDO::PARAM_STR);
        $base->bindParam(':nivel_territorial', $datos['NivelTerritorial'], PDO::PARAM_STR);
        $base->bindParam(':ubicacion_geografica', $datos['UbicacionGeografica'], PDO::PARAM_STR);
        $base->bindParam(':relacion_universidad_actor', $datos['RelacionUniversidadActor'], PDO::PARAM_STR);
        $base->bindParam(':desc_relacion_uniactor', $datos['DescripcionUniactor'], PDO::PARAM_STR);
        $base->bindParam(':resultados_esperados', $datos['ResultadosEsperados'], PDO::PARAM_STR);
        $base->bindParam(':pertenencia_territorial1', $datos['Participacion1'], PDO::PARAM_STR);
        $base->bindParam(':opcion_si_pertenencia1', $datos['OpcionParticipacion2'], PDO::PARAM_STR);
        $base->bindParam(':pertenencia_territorial2', $datos['Participacion2'], PDO::PARAM_STR);
        $base->bindParam(':opcion_si_pertenencia2', $datos['OpcionParticipacion3'], PDO::PARAM_STR);
        $base->bindParam(':pertenencia_territorial3', $datos['Participacion3'], PDO::PARAM_STR);
        $base->bindParam(':participacion_economica_5', $datos['Fomento'], PDO::PARAM_STR);
        $base->bindParam(':participacion_plan_local1', $datos['ParticipacionLocal1'], PDO::PARAM_STR);
        $base->bindParam(':participacion_plan_local2', $datos['ParticipacionLocal2'], PDO::PARAM_STR);
        $base->bindParam(':participacion_plan_local3', $datos['ParticipacionLocal3'], PDO::PARAM_STR);
        if ($base->execute()) {
            return true;
        }
        return false;
        $base->close();
    }

}

?>