<?php

require('./fpdf181/fpdf.php');

//Connect to your database
include("conexion.php");
 
$con = new conexion;
//Select the Products you want to show in your PDF file
$consulta = "SELECT v.numero, v.fechaIngreso, v.motivo, v.placa, concat(p.nombres,' ',p.apellidos) AS nombres, v.institucion FROM visitante v INNER JOIN persona p ON p.dni=v.dni ORDER BY numero";
$result = $con->consulta($consulta);
$number = $con->contador($consulta);

//Initialize the 3 columns and the total
$column_num = "";
$column_fech = "";
$column_motivo = "";
$column_placa = "";
$column_nombres = "";
$column_inst = "";

//For each row, add the field to the corresponding column
while($row = $result->fetch_assoc())
{
    $num = $row["numero"];
    $fech = $row["fechaIngreso"];
    $motivo= $row["motivo"];
    $placa= $row["placa"];
    $nombres =$row["nombres"];
    $inst= $row["institucion"];

    $column_num = $column_num.$num."\n";
    $column_fech = $column_fech.$fech."\n";
    $column_motivo = $column_motivo.$motivo."\n";
    $column_placa = $column_placa.$placa."\n";
    $column_nombres = $column_nombres.$nombres."\n";
    $column_inst = $column_inst.$inst."\n";

}
$con->cerrar();

//Create a new PDF file
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("Visitantes");
$pdf->SetFont('Arial','B',15);
    // Movernos a la derecha
    $pdf->Cell(90);
    // Título
    $pdf->Cell(100,10,'Informe Visitas',1,0,'C');
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
$pdf->Cell(20,6,'Numero',1,0,'L',1);
$pdf->SetX(28);
$pdf->Cell(30,6,'Fecha',1,0,'L',1);
$pdf->SetX(58);
$pdf->Cell(102,6,'Motivo de la visita',1,0,'L',1);
$pdf->SetX(160);
$pdf->Cell(20,6,'Placa',1,0,'L',1);
$pdf->SetX(180);
$pdf->Cell(80,6,'Nombres de los visitantes',1,0,'L',1);
$pdf->SetX(260);
$pdf->Cell(25,6,utf8_decode("Institución"),1,0,'L',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(8);
$pdf->MultiCell(20,6,$column_num,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(28);
$pdf->MultiCell(30,6,$column_fech,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(58);
$pdf->MultiCell(102,6,$column_motivo,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(20,6,$column_placa,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(180);
$pdf->MultiCell(80,6,$column_nombres,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(260);
$pdf->MultiCell(25,6,$column_inst,1);
$pdf->SetY($Y_Table_Position);



$pdf->Output();

?>