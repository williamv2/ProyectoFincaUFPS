<?php

require('./fpdf181/fpdf.php');

//Connect to your database
include("conexion.php");
 
$con = new conexion;
//Select the Products you want to show in your PDF file
$consulta = "SELECT p.numero, p.fechaInicio, p.fechaFinal, concat(pe.nombres,' ',pe.apellidos) AS nombres, pr.nombre AS nombrepro, p.semestre, p.institucion FROM practicante p INNER JOIN persona pe ON pe.dni=p.dni INNER JOIN proyecto pr ON pr.numero=p.numeroProyecto ORDER BY p.numero";
$result = $con->consulta($consulta);
$number = $con->contador($consulta);

//Initialize the 3 columns and the total
$column_num_prac = "";
$column_fechini = "";
$column_fechfin = "";
$column_nombres_prac = "";
$column_nompro = "";
$column_semestre = "";
$column_inst = "";

//For each row, add the field to the corresponding column
while($row = $result->fetch_assoc())
{
    $num_prac = $row["numero"];
    $fechini = $row["fechaInicio"];
    $fechfin = $row["fechaFinal"];
    $nombres_prac =$row["nombres"];
    $nompro= $row["nombrepro"];
    $semestre= $row["semestre"];
    $inst_prac =$row["institucion"];
    
    $column_num_prac = $column_num_prac.$num_prac."\n";
    $column_fechini = $column_fechini.$fechini."\n";
    $column_fechfin = $column_fechfin.$fechfin."\n";
    $column_nombres_prac = $column_nombres_prac.$nombres_prac."\n";
    $column_nompro = $column_nompro.$nompro."\n";
    $column_semestre = $column_semestre.$semestre."\n";
    $column_inst = $column_inst.$inst_prac."\n";

}
$con->cerrar();

//Create a new PDF file
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("Practicantes");
$pdf->SetFont('Arial','B',15);
    // Movernos a la derecha
    $pdf->Cell(90);
    // Título
    $pdf->Cell(100,10,'Informe Practicantes',1,0,'C');
    // Salto de línea
    $pdf->Ln(20);
//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(8);
$pdf->Cell(19,6,'Numero',1,0,'L',1);
$pdf->SetX(27);
$pdf->Cell(25,6,'FechaInicio',1,0,'L',1);
$pdf->SetX(52);
$pdf->Cell(25,6,'FechaFinal',1,0,'L',1);
$pdf->SetX(77);
$pdf->Cell(80,6,'Nombres del Practicante',1,0,'L',1);
$pdf->SetX(157);
$pdf->Cell(80,6,'Nombre del Proyecto',1,0,'L',1);
$pdf->SetX(237);
$pdf->Cell(23,6,'Semestre',1,0,'L',1);
$pdf->SetX(260);
$pdf->Cell(25,6,'Institucion',1,0,'L',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(8);
$pdf->MultiCell(19,6,$column_num_prac,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(27);
$pdf->MultiCell(25,6,$column_fechini,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(52);
$pdf->MultiCell(25,6,$column_fechfin,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(77);
$pdf->MultiCell(80,6,$column_nombres_prac,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(157);
$pdf->MultiCell(80,6,$column_nompro,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(237);
$pdf->MultiCell(23,6,$column_semestre,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(260);
$pdf->MultiCell(25,6,$column_inst,1);
$pdf->SetY($Y_Table_Position);



$pdf->Output();
?>