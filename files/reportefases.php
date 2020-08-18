<?php

/*
  I: si quieres que el navegador intente abrir el PDF.
  D: si quieres pasarlo al navegador para que inicie una descarga del archivo con el nombre puesto en el segundo parametro.
  F: guarda el fichero cono local (osea en el server, debes tener cuidado con esta opcion ya que en la carpeta del servidor debes tener los permisos en 777, sino no guardara nada).
  S: produce la salida como una cadena.
 */


  require_once '../models/ModelFase.php';
  require_once 'plantillaFase.php';

  $ID = filter_input(INPUT_POST, 'relacion_experiencia');
  $faseObjeto = new fase();
  $datos = $faseObjeto->ReporteFase($ID);
  $nombrepdf = "ReporteFase " . date("Y-m-d H:i:s") . ".pdf";
// Creación del objeto de la clase heredada

  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Arial', '', 10);
  $pdf->Cell(190, 1, '', 1, 1, 1, 1);
  $pdf->Ln(4);
  foreach ($datos as $value) {	
  	$pdf->Cell(80, 10,'Nombre de la Experiencia Institucional: ', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['nombre_experiencia'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(190, 10,'DATOS FASE 1', 1, 1, 'C', 0);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'1. Aciones', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f1_acciones'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'2. Resultados Esperados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f1_resultados_esperado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'3. Indicadores de Cumplimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f1_indicadores_cumplimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'4. Resultados Obtenidos', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f1_resultado_obtenido'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'5. Tiempo Empleado', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f1_tiempo_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'6. Recursos Empleados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f1_recurso_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'7. Responsable', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f1_responsable'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'8. Metodo de Seguimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f1_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,utf8_decode('9. Instrumento de Verificación'), 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f1_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(190, 10,'DATOS FASE 2', 1, 1, 'C', 0);
  	$pdf->Ln();
  	  	$pdf->Cell(80, 10,'1. Aciones', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f2_acciones'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'2. Resultados Esperados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f2_resultados_esperado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'3. Indicadores de Cumplimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f2_indicadores_cumplimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'4. Resultados Obtenidos', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f2_resultado_obtenido'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'5. Tiempo Empleado', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f2_tiempo_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'6. Recursos Empleados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f2_recurso_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'7. Responsable', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f2_responsable'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'8. Metodo de Seguimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f2_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,utf8_decode('9. Instrumento de Verificación'), 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f2_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(190, 10,'DATOS FASE 3', 1, 1, 'C', 0);
  	$pdf->Ln();
  	  	$pdf->Cell(80, 10,'1. Aciones', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f3_acciones'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'2. Resultados Esperados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f3_resultados_esperado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'3. Indicadores de Cumplimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f3_indicadores_cumplimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'4. Resultados Obtenidos', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f3_resultado_obtenido'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'5. Tiempo Empleado', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f3_tiempo_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'6. Recursos Empleados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f3_recurso_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'7. Responsable', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f3_responsable'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'8. Metodo de Seguimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f3_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,utf8_decode('9. Instrumento de Verificación'), 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f3_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(190, 10,'DATOS FASE 4', 1, 1, 'C', 0);
  	$pdf->Ln();
  	  	$pdf->Cell(80, 10,'1. Aciones', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f4_acciones'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'2. Resultados Esperados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f4_resultados_esperado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'3. Indicadores de Cumplimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f4_indicadores_cumplimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'4. Resultados Obtenidos', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f4_resultado_obtenido'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'5. Tiempo Empleado', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f4_tiempo_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'6. Recursos Empleados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f4_recurso_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'7. Responsable', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f4_responsable'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'8. Metodo de Seguimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f4_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,utf8_decode('9. Instrumento de Verificación'), 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f4_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(190, 10,'DATOS FASE 5', 1, 1, 'C', 0);
  	$pdf->Ln();
  	  	$pdf->Cell(80, 10,'1. Aciones', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f5_acciones'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'2. Resultados Esperados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f5_resultados_esperado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'3. Indicadores de Cumplimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f5_indicadores_cumplimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'4. Resultados Obtenidos', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f5_resultado_obtenido'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'5. Tiempo Empleado', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f5_tiempo_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'6. Recursos Empleados', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f5_recurso_empleado'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'7. Responsable', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f5_responsable'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,'8. Metodo de Seguimiento', 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f5_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  	$pdf->Cell(80, 10,utf8_decode('9. Instrumento de Verificación'), 10, 0, 'L', 0);
  	$pdf->MultiCell(110,5,$value['f5_metodo_seguimiento'],1,1);
  	$pdf->Ln();
  }
  $pdf->Output($nombrepdf, 'I');
  $pdf->Close();

  ?> 
