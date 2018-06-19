<?php

require('./fpdf181/fpdf.php');

//Connect to your database
include("conexion.php");
 
$con = new conexion;
//Select the Products you want to show in your PDF file
$consulta = "SELECT a.codigo, a.nombre, a.descripcion, a.fechaIngreso, u.codigo AS coduni, u.descripcion AS unidad, a.genero, a.tamano, a.especie, a.cantidadelimento FROM animal a INNER JOIN unidad u ON u.codigo= a.codUnidad";
$result = $con->consulta($consulta);
$number = $con->contador($consulta);

//Initialize the 3 columns and the total
$column_cod = "";
$column_nom = "";
$column_desc = "";
$column_feching = "";
$column_unidad = "";
$column_genero = "";
$column_tam = "";
$column_esp = "";
$column_cantali = "";


//For each row, add the field to the corresponding column
while($row = $result->fetch_assoc())
{
    $cod = $row["codigo"];
    $nom = $row["nombre"];
    $desc= $row["descripcion"];
    $feching= $row["fechaIngreso"];
    $uni =$row["unidad"];
    $genero= $row["genero"];
    $tam= $row["tamano"];
    $esp= $row["especie"];
    $cantali= $row["cantidadelimento"];

    $column_cod = $column_cod.$cod."\n";
    $column_nom = $column_nom.$nom."\n";
    $column_desc = $column_desc.$desc."\n";
    $column_feching = $column_feching.$feching."\n";
    $column_unidad = $column_unidad.$uni."\n";
    $column_genero = $column_genero.$genero."\n";
    $column_tam = $column_tam.$tam."\n";
    $column_esp = $column_esp.$esp."\n";
    $column_cantali = $column_cantali.$cantali."\n";
   
}
$con->cerrar();

//Create a new PDF file
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("Animales");
$pdf->SetFont('Arial','B',15);
    // Movernos a la derecha
    $pdf->Cell(90);
    // Título
    $pdf->Cell(100,10,'Informe Animales',1,0,'C');
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
$pdf->Cell(40,6,'Nombre del Animal',1,0,'L',1);
$pdf->SetX(68);
$pdf->Cell(55,6,utf8_decode("Descripción"),1,0,'L',1);
$pdf->SetX(123);
$pdf->Cell(30,6,'Fecha Ingreso',1,0,'L',1);
$pdf->SetX(153);
$pdf->Cell(60,6,'Unidad',1,0,'L',1);
$pdf->SetX(213);
$pdf->Cell(17,6,utf8_decode("Género"),1,0,'L',1);
$pdf->SetX(230);
$pdf->Cell(18,6,utf8_decode("Tamaño"),1,0,'L',1);
$pdf->SetX(248);
$pdf->Cell(25,6,'Especie',1,0,'L',1);
$pdf->SetX(273);
$pdf->Cell(18,6,'C.Ali/Kg',1,0,'L',1);
$pdf->Ln();


//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(8);
$pdf->MultiCell(20,6,$column_cod,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(28);
$pdf->MultiCell(40,6,$column_nom,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(68);
$pdf->MultiCell(55,6,$column_desc,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(123);
$pdf->MultiCell(30,6,$column_feching,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(153);
$pdf->MultiCell(60,6,$column_unidad,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(213);
$pdf->MultiCell(17,6,$column_genero,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(230);
$pdf->MultiCell(18,6,$column_tam,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(248);
$pdf->MultiCell(25,6,$column_esp,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(273);
$pdf->MultiCell(18,6,$column_cantali,1);
$pdf->SetY($Y_Table_Position);




$pdf->Output();

?>