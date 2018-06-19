<?php

require('./fpdf181/fpdf.php');

//Connect to your database
include("conexion.php");
 
$con = new conexion;
//Select the Products you want to show in your PDF file
$consulta = "SELECT u.codigo,u.nombre,u.numAnimales,u.descripcion, u.codArea, a.descripcion AS area FROM unidad u INNER JOIN area a ON a.codigo=u.codArea ORDER BY u.codigo";
$result = $con->consulta($consulta);
$number = $con->contador($consulta);

//Initialize the 3 columns and the total
$column_cod = "";
$column_nom = "";
$column_numani = "";
$column_desc = "";
$column_area = "";


//For each row, add the field to the corresponding column
while($row = $result->fetch_assoc())
{
    $cod = $row["codigo"];
    $nom = $row["nombre"];
    $numani= $row["numAnimales"];
    $desc= $row["descripcion"];
    $area =$row["area"];

    $column_cod = $column_cod.$cod."\n";
    $column_nom = $column_nom.$nom."\n";
    $column_numani = $column_numani.$numani."\n";
    $column_desc = $column_desc.$desc."\n";
    $column_area = $column_area.$area."\n";
   
}
$con->cerrar();

//Create a new PDF file
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("Unidades");
$pdf->SetFont('Arial','B',15);
    // Movernos a la derecha
    $pdf->Cell(90);
    // Título
    $pdf->Cell(100,10,'Informe Unidades',1,0,'C');
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
$pdf->Cell(72,6,'Nombres de las unidades',1,0,'L',1);
$pdf->SetX(100);
$pdf->Cell(35,6,'Num. Animales',1,0,'L',1);
$pdf->SetX(135);
$pdf->Cell(95,6,utf8_decode("Descripción"),1,0,'L',1);
$pdf->SetX(230);
$pdf->Cell(60,6,'Area',1,0,'L',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(8);
$pdf->MultiCell(20,6,$column_cod,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(28);
$pdf->MultiCell(72,6,$column_nom,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(100);
$pdf->MultiCell(35,6,$column_numani,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(95,6,$column_desc,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(230);
$pdf->MultiCell(60,6,$column_area,1);
$pdf->SetY($Y_Table_Position);




$pdf->Output();

?>