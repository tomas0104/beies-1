<?php

require '../libreria/fpdf/fpdf.php';

class PDF extends FPDF {

// Cabecera de página
    function Header() {
        // Logo
        $this->Image('../images/logo-ucc.png', 10, 4, 20, 18);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 20);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->SetMargins(10, 5, 10);
        // Margins
        $this->Cell(20, 10, 'Reporte Experiencia', 0, 1, 'C');
        // Salto de línea
        $this->Ln();
    }

// Pie de página
    function Footer() {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

?>