<?php

require('./fpdf181/fpdf.php');

//Connect to your database
include("conexion.php");
 
$con = new conexion;
//Select the Products you want to show in your PDF file
$consulta = "SELECT p.numero, p.descripcion, p.nombre, u.codigo, u.descripcion AS unidad FROM proyecto p INNER JOIN unidad u ON u.codigo=p.numeroUnidad";
$result = $con->consulta($consulta);
$number = $con->contador($consulta);

//Initialize the 3 columns and the total
$column_num = "";
$column_desc = "";
$column_nom = "";
$column_uni = "";



//For each row, add the field to the corresponding column
while($row = $result->fetch_assoc())
{
    $num = $row["numero"];
    $desc= $row["descripcion"];
    $nom = $row["nombre"];
    $unidad= $row["unidad"];
    

    $column_num = $column_num.$num."\n";
    $column_desc = $column_desc.$desc."\n";
    $column_nom = $column_nom.$nom."\n";
    $column_uni = $column_uni.$unidad."\n";
   
}
$con->cerrar();

//Create a new PDF file
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("Proyectos");
$pdf->SetFont('Arial','B',15);
    // Movernos a la derecha
    $pdf->Cell(90);
    // Título
    $pdf->Cell(100,10,'Informe Proyectos',1,0,'C');
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
$pdf->Cell(20,6,utf8_decode("N°"),1,0,'L',1);
$pdf->SetX(28);
$pdf->Cell(100,6,utf8_decode("Descripción"),1,0,'L',1);
$pdf->SetX(128);
$pdf->Cell(100,6,'Nombre',1,0,'L',1);
$pdf->SetX(228);
$pdf->Cell(60,6,'Unidad',1,0,'L',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(8);
$pdf->MultiCell(20,6,$column_num,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(28);
$pdf->MultiCell(100,6,$column_desc,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(128);
$pdf->MultiCell(100,6,$column_nom,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(228);
$pdf->MultiCell(60,6,$column_uni,1);
$pdf->SetY($Y_Table_Position);




$pdf->Output();

?>