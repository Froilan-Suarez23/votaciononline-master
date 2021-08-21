<?php
require('pdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
  
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Reporte de votacion',1,0,'C');
    // Line break
    $this->Ln(80);
    $this->Ln(80);
    $this->Ln(80);

    $this->Cell(80,10,'voted_for',1,0,'c',0);
    $this->Cell(30,10,'nombre',1,0,'c',0);


}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require('config.php');

$conn = mysqli_connect($hostname, $username, $password, $database);

$IDM=0;
$GP=0;
$JMS=0;
$PV=0;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Write(10, "Reporte de votacion");
$pdf->Ln(20);

$sql ="SELECT * FROM tbl_users WHERE voted_for='IDM'";
$result= mysqli_query($conn, $sql);

if($result)
{
    $pdf->Write(5, "1-. Andres Manuel Lopez Obrador     ");
    $pdf->Ln(10);
    
    $pdf->Write(5, "Resultado: ");

    while($row=$result->fetch_assoc()){

        if($row['voted_for']){
            $IDM++;
        }

        $voted_for= $IDM*1;
    }

    $pdf->Write(5, $voted_for);
                  
}

///////////////////////////////////////////////////////////////////////
$pdf->Ln(20);

$sql4 ="SELECT * FROM tbl_users WHERE voted_for='PV'";
$result4= mysqli_query($conn, $sql4);

if($result4)
{
    $pdf->Write(5, "4-. Kim Jong-un.      ");
    $pdf->Ln(10);
    
    $pdf->Write(5, "Resultado: ");

    while($row=$result4->fetch_assoc()){

        if($row['voted_for']){
            $PV++;
        }

        $PV_value= $PV*1;
    }

    $pdf->Write(5, $PV_value);
                  
}



///////////////////////////////////////////////////////////////////////
$pdf->Ln(20);

$sql2 ="SELECT * FROM tbl_users WHERE voted_for='GP'";
$result2= mysqli_query($conn, $sql2);

if($result2)
{
    $pdf->Write(5, "2-. Vladimir Putin      ");
    $pdf->Ln(10);
    
    $pdf->Write(5, "Resultado: ");

    while($row=$result2->fetch_assoc()){

        if($row['voted_for']){
            $GP++;
        }

        $gp_value= $GP*1;
    }

    $pdf->Write(5, $gp_value);
                  
}


///////////////////////////////////////////////////////////////////////
$pdf->Ln(20);

$sql3 ="SELECT * FROM tbl_users WHERE voted_for='JMS'";
$result3= mysqli_query($conn, $sql3);

if($result3)
{
    $pdf->Write(5, "3-. Joseph Robinette Biden Jr.      ");
    $pdf->Ln(10);
    
    $pdf->Write(5, "Resultado: ");

    while($row=$result3->fetch_assoc()){

        if($row['voted_for']){
            $JMS++;
        }

        $JMS_value= $JMS*1;
    }

    $pdf->Write(5, $JMS_value);
                  
}







$pdf->Output();


?>