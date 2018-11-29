<?php

require('./fpdf181/fpdf.php');
$fechaactual = getdate();
//Connect to your database
include("conexion.php");
 
$con = new conexion;
//Select the Products you want to show in your PDF file
$consulta = "SELECT p.codigo, p.descripcion, p.cantidad, p.peso, p.fecha, u.codigo AS coduni, u.descripcion AS unidad FROM produccion p INNER JOIN unidad u ON u.codigo= p.codUnidad";
$result = $con->consulta($consulta);
$number = $con->contador($consulta);

//Initialize the 3 columns and the total
$column_cod = "";
$column_desc = "";
$column_cant = "";
$column_peso = "";
$column_fecha = "";
$column_unidad = "";


//For each row, add the field to the corresponding column
while($row = $result->fetch_assoc())
{
    $cod = $row["codigo"];
    $desc= $row["descripcion"];
    $cant = $row["cantidad"];
    $peso = $row["peso"];
    $fecha= $row["fecha"];
    $uni =$row["unidad"];

    $column_cod = $column_cod.$cod."\n";
    $column_desc = $column_desc.$desc."\n";
    $column_cant = $column_cant.$cant."\n";
    $column_peso = $column_peso.$peso."\n";
    $column_fecha = $column_fecha.$fecha."\n";
    $column_unidad = $column_unidad.$uni."\n";
   
}
$con->cerrar();

//Create a new PDF file
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("Produccion");
$pdf->SetFont('Arial','B',15);
$pdf->Image("../img/logo_ufps.png",5,0,70,20);
    // Movernos a la derecha
    $pdf->Cell(90);
    // Título
    $pdf->Cell(100,10,utf8_decode('Informe Producción'),1,0,'C');
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
$pdf->Cell(20,6,'Codigo',1,0,'L',1);
$pdf->SetX(28);
$pdf->Cell(55,6,utf8_decode('Descripción'),1,0,'L',1);
$pdf->SetX(83);
$pdf->Cell(40,6,"Cantidad",1,0,'L',1);
$pdf->SetX(123);
$pdf->Cell(30,6,'Peso Kg o L',1,0,'L',1);
$pdf->SetX(153);
$pdf->Cell(60,6,'Fecha',1,0,'L',1);
$pdf->SetX(213);
$pdf->Cell(60,6,'Unidad',1,0,'L',1);
$pdf->Ln();


//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(8);
$pdf->MultiCell(20,6,$column_cod,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(28);
$pdf->MultiCell(55,6,utf8_decode($column_desc),1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(83);
$pdf->MultiCell(40,6,$column_cant,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(123);
$pdf->MultiCell(30,6,$column_peso,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(153);
$pdf->MultiCell(60,6,$column_fecha,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(213);
$pdf->MultiCell(60,6,$column_unidad,1);
$pdf->SetY($Y_Table_Position);



$pdf->Cell(280,-27,"Fecha: ".$fechaactual['mday']."/".$fechaactual['mon']."/".$fechaactual['year'],0,1,'R');


$pdf->Output();

?>