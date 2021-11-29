<?php
 session_start();
 
?>

<?php

 include 'php/dbconnect1.php';
 include 'pdf/fpdf.php';

 $pdf = new FPDF();
 $pdf->AddPage();
  
  $pdf->SetFont("Arial","B",16);
  $pdf->setTextColor(252,3,3);
  $pdf->cell(190,20,"D-APMC Bill","1","1","C");

  //table colum

  $id=$_SESSION['pid'];
  $pname=$_SESSION['pn'];
  $pquantity=$_SESSION['pq'];
  $pprice=$_SESSION['pp'];
  $fn=$_SESSION['fn'];  
  $ln=$_SESSION['ln'];
  $tn=$_SESSION['name'];
  $gst = $pprice*0.12;
  $gstpp= $pprice-$gst;


  $pdf->SetFont("Arial","B",12);
  $pdf->setLeftMargin(30);
  $pdf->setTextColor(0,0,0);
  
  $pdf->SetFont("Arial","B",14);
  $pdf->cell(120,20,"Product Details","0","1","L");

  $pdf->SetFont("Arial","B",12);
  $pdf->cell(70,10,"Product ID","0","0","L");
  $pdf->cell(70,10,": $id","0","1","L");
  
  $pdf->cell(70,10,"Product Name","0","0","L");
  $pdf->cell(70,10,": $pname","0","1","L");

  $pdf->cell(70,10,"Product Quantity","0","0","L");
  $pdf->cell(70,10,": $pquantity","0","1","L");
  
  $pdf->cell(70,10,"Product Price","0","0","L");
  $pdf->cell(70,10,": $pprice","0","1","L");

  $pdf->Line(10, 30, 200, 30);
 
  $pdf->SetFont("Arial","B",14);
  $pdf->cell(120,20,"Farmer & Traders Details","0","1","L");

  $pdf->SetFont("Arial","B",12);
  $pdf->cell(70,10,"Farmer Name","0","0","L");
  $pdf->cell(90,10,": $fn $ln","0","1","L");
  
  $pdf->cell(70,10,"Traders Name","0","0","L");
  $pdf->cell(90,10,": $tn","0","1","L");

  $pdf->cell(70,10,"Deal Fix From","0","0","L");
  $pdf->cell(90,10,": D-APMC Online Website","0","1","L");

  $pdf->Line(10, 30, 200, 30);
  $pdf->SetFont("Arial","B",14);
  $pdf->cell(120,20,"Price Details","0","1","L");

  $pdf->SetFont("Arial","B",12);
  $pdf->cell(70,10,"Product Price","0","0","L");
  $pdf->cell(90,10,": $pprice","0","1","L");
  
  $pdf->cell(70,10,"12% GST","0","0","L");
  $pdf->cell(70,10,": $gst","0","1","L");

  $pdf->cell(70,10,"TOtal Price","0","0","L");
  $pdf->cell(70,10,": $gstpp","0","1","L");
  
  $pdf->Line(10, 30, 200, 30);


  $pdf->SetFont("Arial","B",10);
  $pdf->cell(170,20,"This Bill Issue By D-APMC Portal","0","1","R");

 $pdf->Output();
 


?>
