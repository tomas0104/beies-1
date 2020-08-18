<?php 

require_once '../config/conexion.php';

class PoblacionUniversitaria{

	public $cnx;

	public function __construct(){
		$this->cnx = conexion::conectar();
	}

	public function SelectExperiencia($sede){
		$query = ('SELECT ID, nombre_experiencia FROM experiencia WHERE sede = :sede order by ID desc limit 20');
        $base = $this->cnx->prepare($query);
        $base->bindParam(':sede', $sede, PDO::PARAM_STR);
        if ($base->execute()) {

            if ($base->rowCount() > 0) {
                while ($fila = $base->fetch(PDO::FETCH_ASSOC)) {
                    $datos[] = $fila;
                }
                return $datos;
            }
        }
        return false;
        $base->close();
    }

    public function ListarPoblacion($sede){
        $query = 'SELECT pu.ID, exp.nombre_experiencia, pu.nombres, pu.apellidos, pu.vinculacion_universidad, 
                         pu.vinculacion_experiencia, pu.programa
                  FROM poblacion_universitaria  pu INNER JOIN experiencia exp on pu.experiencia_ID = exp.ID
                  WHERE exp.sede = :sede';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':sede', $sede, PDO::PARAM_STR);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        $base->close();
        
    }

    public function Registrar($datos){
        $query = ("INSERT INTO poblacion_universitaria (
            experiencia_ID, 
            tipo_documento, 
            numero_documento, 
            codigo_universidad, 
            nombres, 
            apellidos, 
            telefono, 
            celular, 
            correo, 
            vinculacion_experiencia, 
            vinculacion_universidad, 
            facultad, 
            sede, 
            programa, 
            horas, 
            tipologia_actividad
            ) 
            VALUES(:experiencia_ID, :tipo_documento, :numero_documento, :codigo_universidad, :nombres, :apellidos, :telefono, :celular, :correo, :vinculacion_experiencia, :vinculacion_universidad, :facultad, :sede, :programa, :horas, :tipologia_actividad)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":experiencia_ID", $datos['ID'], PDO::PARAM_INT);
        $base->bindParam(":tipo_documento", $datos['TipoDocumento'], PDO::PARAM_STR);
        $base->bindParam(":numero_documento", $datos['NumeroDocumento'], PDO::PARAM_INT);
        $base->bindParam(":codigo_universidad", $datos['CodigoUniversidad'], PDO::PARAM_INT);
        $base->bindParam(":nombres", $datos['Nombres'], PDO::PARAM_STR);
        $base->bindParam(":apellidos", $datos['Apellidos'], PDO::PARAM_STR);
        $base->bindParam(":telefono", $datos['Telefono'], PDO::PARAM_STR);
        $base->bindParam(":celular", $datos['Celular'], PDO::PARAM_STR);
        $base->bindParam(":correo", $datos['Correo'], PDO::PARAM_STR);
        $base->bindParam(":vinculacion_experiencia", $datos['VinculoExperiencia'], PDO::PARAM_STR);
        $base->bindParam(":vinculacion_universidad", $datos['VinculoUniversidad'], PDO::PARAM_STR);
        $base->bindParam(":sede", $datos['Sede'], PDO::PARAM_STR);
        $base->bindParam(":facultad", $datos['Facultad'], PDO::PARAM_STR);
        $base->bindParam(":programa", $datos['Programa'], PDO::PARAM_STR);
        $base->bindParam(":horas", $datos['Horas'], PDO::PARAM_INT);
        $base->bindParam(":tipologia_actividad", $datos['TipologiaActividad'], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        return false;
        $base->close();
        
    }
    
    public function ObtenerID($id){
        $query = 'SELECT ID, tipo_documento, numero_documento, codigo_universidad, nombres, apellidos, telefono,celular,correo,'
                . 'vinculacion_experiencia,vinculacion_universidad,sede, facultad, programa, horas, tipologia_actividad'
                . ' FROM poblacion_universitaria WHERE ID = :id';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':id', $id, PDO::PARAM_INT);
        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }
    
    public function ActualizarPoblacion($datos){
        $query = 'UPDATE poblacion_universitaria SET tipo_documento = :tipo_documento, numero_documento = :numero_documento,
                  codigo_universidad = :codigo_universidad, nombres = :nombres, apellidos = :apellidos,
                  telefono = :telefono, celular = :celular, correo = :correo, vinculacion_experiencia = :vinculacion_experiencia,
                  vinculacion_universidad = :vinculacion_universidad, sede = :sede, facultad = :facultad, programa = :programa,
                  horas = :horas, tipologia_actividad = :tipologia_actividad  WHERE ID = :id';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':id', $datos['ID'], PDO::PARAM_INT);
        $base->bindParam(':tipo_documento', $datos['TipoDocumento'], PDO::PARAM_STR);
        $base->bindParam(':numero_documento', $datos['NumeroDocumento'], PDO::PARAM_INT);
        $base->bindParam(':codigo_universidad', $datos['CodigoUniversidad'], PDO::PARAM_INT);
        $base->bindParam(':nombres', $datos['Nombres'], PDO::PARAM_STR);
        $base->bindParam(':apellidos', $datos['Apellidos'], PDO::PARAM_STR);
        $base->bindParam(':telefono', $datos['Telefono'], PDO::PARAM_STR);
        $base->bindParam(':celular', $datos['Celular'], PDO::PARAM_STR);
        $base->bindParam(':correo', $datos['Correo'], PDO::PARAM_STR);
        $base->bindParam(':vinculacion_experiencia', $datos['VinculoExperiencia'], PDO::PARAM_STR);
        $base->bindParam(':vinculacion_universidad', $datos['VinculoUniversidad'], PDO::PARAM_STR);
        $base->bindParam(':sede', $datos['Sede'], PDO::PARAM_STR);
        $base->bindParam(':facultad', $datos['Facultad'], PDO::PARAM_STR);
        $base->bindParam(':programa', $datos['Programa'], PDO::PARAM_STR);
        $base->bindParam(':horas', $datos['Horas'], PDO::PARAM_STR);
        $base->bindParam(':tipologia_actividad', $datos['TipologiaActividad'], PDO::PARAM_STR);
        
        if($base->execute()){
            return true;
        }
        return false;
        $base->close();
        
    }

    public function Grafica(){
        $query = ("SELECT COUNT(PU.experiencia_ID) as 'Total', EX.sede as 'Sede' FROM poblacion_universitaria PU INNER JOIN experiencia EX  ON PU.experiencia_ID = EX.ID GROUP BY EX.sede ORDER BY EX.sede");
        $base = $this->cnx->prepare($query);
        $base->execute();
        return $base->fetchALL(PDO::FETCH_ASSOC);
        $base->close();
    }

    public function GraficaPrograma(){
        $query = ("SELECT COUNT(PU.programa) AS 'Total', CASE PU.programa  WHEN '' THEN 'No registra Programa' ELSE PU.programa END AS 'Nombre' FROM poblacion_universitaria PU GROUP BY Programa");
        $base = $this->cnx->prepare($query);
        $base->execute();
        return $base->fetchALL(PDO::FETCH_ASSOC);
        $base->close();
    }
    
    public function GraficaFacultad(){
        $query = ("SELECT COUNT(pu.facultad)AS Total, pu.facultad as Facultad FROM poblacion_universitaria pu GROUP BY pu.facultad");
        $base = $this->cnx->prepare($query);
        $base->execute();
        return $base->fetchALL(PDO::FETCH_ASSOC);
        $base->close();
    }


    public function GraficaVinculoExp(){
        $query = ("SELECT COUNT(pu.vinculacion_experiencia) AS 'TotalVinculo', pu.vinculacion_experiencia AS 'Vinculo' FROM poblacion_universitaria pu GROUP BY pu.vinculacion_experiencia");
        $base = $this->cnx->prepare($query);
        $base->execute();
        return $base->fetchALL(PDO::FETCH_ASSOC);
        $base->close();
    }

    public function GraficaVinculoUni(){
        $query = ("SELECT COUNT(pu.vinculacion_universidad) AS 'TotalVinculoExp', pu.vinculacion_universidad AS 'VinculoUniversidad' FROM poblacion_universitaria pu GROUP BY pu.vinculacion_universidad");
        $base = $this->cnx->prepare($query);
        $base->execute();
        return $base->fetchALL(PDO::FETCH_ASSOC);
        $base->close();
    }

    
    
}

?>