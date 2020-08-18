<?php

/*
  I: si quieres que el navegador intente abrir el PDF.
  D: si quieres pasarlo al navegador para que inicie una descarga del archivo con el nombre puesto en el segundo parametro.
  F: guarda el fichero cono local (osea en el server, debes tener cuidado con esta opcion ya que en la carpeta del servidor debes tener los permisos en 777, sino no guardara nada).
  S: produce la salida como una cadena.
 */


require_once '../models/ModelReporte.php';
require_once 'plantilla.php';

//$ID = $_POST['relacion_experiencia'];
$ID = filter_input(INPUT_POST, 'relacion_experiencia');
$obj = new Reporte();
$datos = $obj->SelectExperiencia($ID);
//$datosu = $obj->SelectPoblacionU($id);
//$datospe = $obj->SelectPoblacionE($id);
//$datosoe = $obj->SelectOrganizacionE($id);
$nombrepdf = "Reporte" . date("Y-m-d H:i:s") . ".pdf";

// Creación del objeto de la clase heredada

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
foreach ($datos as $experiencia) {
    $pdf->Cell(190, 2, "============================================================================================", 0, 1, 'C', TRUE);
    $pdf->Ln();
    $pdf->Cell(190, 4, "*============================== Datos Principales de la experiencia =================================*", 0, 1, 'C');
    $pdf->Ln();

    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->MultiCell(90, 5, "1. Nombre de la experiencia: ", 0, 1);
    $pdf->SetXY($x + 90, $y);
    $pdf->MultiCell(100, 5, utf8_decode($experiencia['nombre_experiencia']), 1, 1);
    $pdf->Ln();

    $x1 = $pdf->GetX();
    $y1 = $pdf->GetY();
    $pdf->MultiCell(90, 5, "2. Categorias: ", 0, 1);
    $pdf->SetXY($x1 + 90, $y1);
    $pdf->MultiCell(100, 5, $experiencia['categoria_experiencia'], 1, 1);
    $pdf->Ln();

    $x2 = $pdf->GetX();
    $y2 = $pdf->GetY();
    $pdf->MultiCell(90, 5, "3. Sede: ", 0, 1);
    $pdf->SetXY($x2 + 90, $y2);
    $pdf->MultiCell(100, 5, $experiencia['sede'], 1, 1);
    $pdf->Ln();

    $x3 = $pdf->GetX();
    $y3 = $pdf->GetY();
    $pdf->MultiCell(90, 5, "4. Areas involucradas: ", 0, 1);
    $pdf->SetXY($x3 + 90, $y3);
    $pdf->MultiCell(100, 5, $experiencia['area_involucrada'], 1, 1);
    $pdf->Ln();

    $x4 = $pdf->GetX();
    $y4 = $pdf->GetY();
    $pdf->MultiCell(90, 5, "5. Fecha de inicio: ", 0, 1);
    $pdf->SetXY($x4 + 90, $y4);
    $pdf->MultiCell(100, 5, $experiencia['fecha_inicio'], 1, 1);
    $pdf->Ln();

    $pdf->Cell(190, 2, "*============================= Responsabilidad Social Universitaria ================================*", 0, 1, 'C');
    $pdf->Ln();
    $pdf->Ln();

    $x5 = $pdf->GetX();
    $y5 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("6. Componente de internacionalización: "), 0, 1);
    $pdf->SetXY($x5 + 90, $y5);
    $pdf->MultiCell(100, 5, $experiencia['comp_inter'], 1, 1);
    $pdf->Ln();

    $x6 = $pdf->GetX();
    $y6 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("7. La experiencia institucional implica integración entre investigación y proyección social: "), 0, 1);
    $pdf->SetXY($x6 + 90, $y6);
    $pdf->MultiCell(100, 5, $experiencia['relacion_inves_proyeccion'], 1, 1);
    $pdf->Ln();

    $x7 = $pdf->GetX();
    $y7 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("8. En qué ámbitos de la Responsabilidad Social se enmarca la experiencia institucional: "), 0, 1);
    $pdf->SetXY($x7 + 90, $y7);
    $pdf->MultiCell(100, 5, $experiencia['ambito_resp_social'], 1, 1);
    $pdf->Ln();

    $x8 = $pdf->GetX();
    $y8 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("9. Dificultades con las se ha encontrado en el desarrollo de la experiencia institucional: "), 0, 1);
    $pdf->SetXY($x8 + 90, $y8);
    $pdf->MultiCell(100, 5, $experiencia['dificultades_desarrollo_practica'], 1, 1);
    $pdf->Ln();

    $pdf->Cell(190, 5, "10. Recursos invertidos", 1, 1, 'C');
    $pdf->Ln();

    $x9 = $pdf->GetX();
    $y9 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("10.1 Tiempo: "), 0, 1);
    $pdf->SetXY($x9 + 90, $y9);
    $pdf->MultiCell(100, 5, $experiencia['recursos_invertido_tiempo'], 1, 1);
    $pdf->Ln();

    $x10 = $pdf->GetX();
    $y10 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("10.2 Talento empresarial: "), 0, 1);
    $pdf->SetXY($x10 + 90, $y10);
    $pdf->MultiCell(100, 5, $experiencia['recursos_invertido_talento'], 1, 1);
    $pdf->Ln();

    $x11 = $pdf->GetX();
    $y11 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("10.3 Recursos financieros: "), 0, 1);
    $pdf->SetXY($x11 + 90, $y11);
    $pdf->MultiCell(100, 5, $experiencia['recursos_invertido_financiero'], 1, 1);
    $pdf->Ln();

    $x12 = $pdf->GetX();
    $y12 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("10.4 Recursos técnicos o materiales: "), 0, 1);
    $pdf->SetXY($x12 + 90, $y12);
    $pdf->MultiCell(100, 5, $experiencia['recursos_invertido_tecnicos'], 1, 1);
    $pdf->Ln();

    $x13 = $pdf->GetX();
    $y13 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("11. Espacios involucrados: "), 0, 1);
    $pdf->SetXY($x13 + 90, $y13);
    $pdf->MultiCell(100, 5, $experiencia['espacios_involucrados'], 1, 1);
    $pdf->Ln();

    /*$x14 = $pdf->GetX();
    $y14 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("12. Presupuesto: "), 0, 1);
    $pdf->SetXY($x14 + 90, $y14);
    $pdf->MultiCell(100, 5, $experiencia['presupuesto_destinado_practica'], 1, 1);
    $pdf->Ln();
*/
    $x15 = $pdf->GetX();
    $y15 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("13. Expectativa de continuidad de la experiencia institucional: "), 0, 1);
    $pdf->SetXY($x15 + 90, $y15);
    $pdf->MultiCell(100, 5, $experiencia['expectativa_continuidad'], 1, 1);
    $pdf->Ln();

    $x16 = $pdf->GetX();
    $y16 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("14. Estado de evaluación de la experiencia institucional: "), 0, 1);
    $pdf->SetXY($x16 + 90, $y16);
    $pdf->MultiCell(100, 5, $experiencia['estado_evaluacion'], 1, 1);
    $pdf->AddPage();

    $pdf->Cell(190, 5, "15. Explique si su experiencia institucional incorpora alguno de los siguientes componentes innovadores", 1, 1, 'C');
    $pdf->ln();

    $x17 = $pdf->GetX();
    $y17 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("15.1. Multidisciplinar: "), 0, 1);
    $pdf->SetXY($x17 + 90, $y17);
    $pdf->MultiCell(100, 5, $experiencia['innovacion_multidisciplinar'], 1, 1);
    $pdf->Ln();

    $x18 = $pdf->GetX();
    $y18 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("15.2. Utilización de TIC: "), 0, 1);
    $pdf->SetXY($x18 + 90, $y18);
    $pdf->MultiCell(100, 5, $experiencia['innovacion_tic'], 1, 1);
    $pdf->Ln();

    $x19 = $pdf->GetX();
    $y19 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("15.3. Interdisciplinario: "), 0, 1);
    $pdf->SetXY($x19 + 90, $y19);
    $pdf->MultiCell(100, 5, $experiencia['innovacion_interdisciplinario'], 1, 1);
    $pdf->Ln();

    $x20 = $pdf->GetX();
    $y20 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("15.4. Trabajo interinstitucional: "), 0, 1);
    $pdf->SetXY($x20 + 90, $y20);
    $pdf->MultiCell(100, 5, $experiencia['innovacion_interinstitucional'], 1, 1);
    $pdf->Ln();

    $x21 = $pdf->GetX();
    $y21 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("15.5. Nuevo desarrollo tecnológico: "), 0, 1);
    $pdf->SetXY($x21 + 90, $y21);
    $pdf->MultiCell(100, 5, $experiencia['innovacion_nuevo_desarrollo'], 1, 1);
    $pdf->Ln();

    $x22 = $pdf->GetX();
    $y22 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("15.6. Transferencia de conocimiento y tecnología: "), 0, 1);
    $pdf->SetXY($x22 + 90, $y22);
    $pdf->MultiCell(100, 5, $experiencia['innovacion_transferencia'], 1, 1);
    $pdf->Ln();

    $x23 = $pdf->GetX();
    $y23 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("15.7. Inclusión (social, género, etnia): "), 0, 1);
    $pdf->SetXY($x23 + 90, $y23);
    $pdf->MultiCell(100, 5, $experiencia['innovacion_inclusion'], 1, 1);
    $pdf->Ln();

    $x24 = $pdf->GetX();
    $y24 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("15.8. Otro componente): "), 0, 1);
    $pdf->SetXY($x24 + 90, $y24);
    $pdf->MultiCell(100, 5, $experiencia['innovacion_otro'], 1, 1);
    $pdf->AddPage();

    $pdf->Cell(190, 5, utf8_decode("16. Evaluación de la experiencia institucional: descríba la estrategia y mecanismos"), 1, 1, 'C');
    $pdf->Ln();

    $x25 = $pdf->GetX();
    $y25 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("16.1. Formatos: "), 0, 1);
    $pdf->SetXY($x25 + 90, $y25);
    $pdf->MultiCell(100, 5, $experiencia['evaluacion_formato'], 1, 1);
    $pdf->Ln();

    $x26 = $pdf->GetX();
    $y26 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("16.2. Cuestionarios: "), 0, 1);
    $pdf->SetXY($x26 + 90, $y26);
    $pdf->MultiCell(100, 5, $experiencia['evaluacion_cuestionario'], 1, 1);
    $pdf->Ln();

    $x27 = $pdf->GetX();
    $y27 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("16.3. Entrevistas: "), 0, 1);
    $pdf->SetXY($x27 + 90, $y27);
    $pdf->MultiCell(100, 5, $experiencia['evaluacion_entrevista'], 1, 1);
    $pdf->Ln();

    $x28 = $pdf->GetX();
    $y28 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("16.4. Focus group: "), 0, 1);
    $pdf->SetXY($x28 + 90, $y28);
    $pdf->MultiCell(100, 5, utf8_decode($experiencia['evaluacion_focus_group']), 1, 1);
    $pdf->Ln();

    $x29 = $pdf->GetX();
    $y29 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("16.5. Visitas de campo: "), 0, 1);
    $pdf->SetXY($x29 + 90, $y29);
    $pdf->MultiCell(100, 5, $experiencia['evaluacion_visita'], 1, 1);
    $pdf->Ln();

    $x30 = $pdf->GetX();
    $y30 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("16.6. Evaluación externa: "), 0, 1);
    $pdf->SetXY($x30 + 90, $y30);
    $pdf->MultiCell(100, 5, $experiencia['evaluacion_externa'], 1, 1);
    $pdf->Ln();

    $x31 = $pdf->GetX();
    $y31 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("16.7. Otros Especifique: "), 0, 1);
    $pdf->SetXY($x31 + 90, $y31);
    $pdf->MultiCell(100, 5, $experiencia['evaluacion_otro'], 1, 1);
    $pdf->Ln();

    $pdf->Cell(190, 2, utf8_decode("===================================== Valoración Territorial ======================================"), 0, 1, 'C');
    $pdf->Ln();

    $x32 = $pdf->GetX();
    $y32 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("17. Nivel territorial: "), 0, 1);
    $pdf->SetXY($x32 + 90, $y32);
    $pdf->MultiCell(100, 5, $experiencia['nivel_territorial'], 1, 1);
    $pdf->Ln();

    $x33 = $pdf->GetX();
    $y33 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("18. Ubicación geográfica: "), 0, 1);
    $pdf->SetXY($x33 + 90, $y33);
    $pdf->MultiCell(100, 5, $experiencia['ubicacion_geografica'], 1, 1);
    $pdf->Ln();

    $x34 = $pdf->GetX();
    $y34 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("19. Como se generó la relación entre universidad y actor: "), 0, 1);
    $pdf->SetXY($x34 + 90, $y34);
    $pdf->MultiCell(100, 5, $experiencia['relacion_universidad_actor'], 1, 1);
    $pdf->Ln();

    $x35 = $pdf->GetX();
    $y35 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("20. Resultados esperados: "), 0, 1);
    $pdf->SetXY($x35 + 90, $y35);
    $pdf->MultiCell(100, 5, $experiencia['resultados_esperados'], 1, 1);
    $pdf->Ln();

    $pdf->Cell(190, 5, utf8_decode("21. Pertenencia territorial de los actores externos que participan en la experiencia institucional"), 1, 1, 'C');
    $pdf->Ln();

    $x36 = $pdf->GetX();
    $y36 = $pdf->GetY();
    $pdf->MultiCell(120, 5, utf8_decode("21.1. La comunidad que participa de la experiencia institucional, conoce las dinámicas de su territorio y expresa pertenencia hacia el mismo: "), 0, 1);
    $pdf->SetXY($x36 + 140, $y36);
    $pdf->MultiCell(50, 5, $experiencia['pertenencia_territorial1'], 1, 1);
    $pdf->Ln();

    $x37 = $pdf->GetX();
    $y37 = $pdf->GetY();
    $pdf->MultiCell(120, 5, utf8_decode("21.2. Se vinculan con redes en el territorio local (a nivel municipalidad, localidad, comuna, barrio): "), 0, 1);
    $pdf->SetXY($x37 + 140, $y37);
    $pdf->MultiCell(50, 5, $experiencia['opcion_si_pertenencia1'] . ": " . $experiencia['pertenencia_territorial2'], 1, 1);
    $pdf->Ln();

    $x38 = $pdf->GetX();
    $y38 = $pdf->GetY();
    $pdf->MultiCell(120, 5, utf8_decode("21.3.  Pertenece o participa de una organización de integración (Confederación, Federación, asociación, otra), a nivel departamental, regional o nacional: "), 0, 1);
    $pdf->SetXY($x38 + 140, $y38);
    $pdf->MultiCell(50, 5, $experiencia['opcion_si_pertenencia2'] . ": " . $experiencia['pertenencia_territorial3'], 1, 1);
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();

    $x39 = $pdf->GetX();
    $y39 = $pdf->GetY();
    $pdf->MultiCell(90, 5, utf8_decode("21.4. Fomento económico de la experiencia institucional: "), 0, 1);
    $pdf->SetXY($x39 + 90, $y39);
    $pdf->MultiCell(100, 5, $experiencia['participacion_economica_5'], 1, 1);
    $pdf->Ln();
    $pdf->Ln();

    $pdf->Cell(190, 5, utf8_decode("22. Participación de la experiencia institucional en la planificación local"), 1, 1, 'C');
    $pdf->Ln();

    $x40 = $pdf->GetX();
    $y40 = $pdf->GetY();
    $pdf->MultiCell(120, 5, utf8_decode("22.1. Se participa en espacios de planificación de la política publica: "), 0, 1);
    $pdf->SetXY($x40 + 140, $y40);
    $pdf->MultiCell(50, 5, $experiencia['participacion_plan_local1'], 1, 1);
    $pdf->Ln();


    $x41 = $pdf->GetX();
    $y41 = $pdf->GetY();
    $pdf->MultiCell(120, 5, utf8_decode("22.2. Existe una relación con las instituciones de gobierno que apoyan iniciativas o generan beneficios a proyectos locales: "), 0, 1);
    $pdf->SetXY($x41 + 140, $y41);
    $pdf->MultiCell(50, 5, $experiencia['participacion_plan_local2'], 1, 1);
    $pdf->Ln();


    $x42 = $pdf->GetX();
    $y42 = $pdf->GetY();
    $pdf->MultiCell(120, 5, utf8_decode("22.3. La buena práctica considera los planes de desarrollo local para el cumplimiento de sus objetivos: "), 0, 1);
    $pdf->SetXY($x42 + 140, $y42);
    $pdf->MultiCell(50, 5, $experiencia['participacion_plan_local3'], 1, 1);
    $pdf->Ln();
    $pdf->Ln();

    $pdf->Cell(190, 2, "============================================================================================", 0, 1, 'C', TRUE);
}

$pdf->Output($nombrepdf, 'I');
$pdf->Close();
?> 
