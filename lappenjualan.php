<?php
    include "sql.php";
    $Hasil = mysqli_query($conn, "SELECT kdbarang, nmbarang, satuan, warna, jumlah FROM barang ORDER by kdbarang");
    $Data = array();

    while($row = mysqli_fetch_assoc($Hasil)){
        array_push($Data, $row);
    }

    $Judul = "Laporan Data Barang";
    $tgl= "Time : ".date("l, d F Y");
    $Header= array(
        array("label"=>"Kode Barang", "length"=>30, "align"=>"C"),
        array("label"=>"Nama Barang", "length"=>40, "align"=>"C"),
        array("label"=>"Satuan", "length"=>30, "align"=>"C"),
        array("label"=>"Warna", "length"=>33, "align"=>"C"),
        array("label"=>"Jumlah", "length"=>30, "align"=>"C"),
    );

    require('fpdf6/fpdf.php');
    $pdf = new FPDF();

    $pdf->AddPage();  // Use this line to add a default page in portrait orientation

    $pdf->SetFont('arial', 'B', '15');
    $pdf->Cell(0, 15, $Judul, 0, 1, 'C');
    $pdf->SetFont('arial', 'i', '9');
    $pdf->Cell(0, 10, $tgl, 0, 1, 'P');

    // Set up the header styling
    $pdf->SetFont('arial', '', '12');
    $pdf->SetFillColor(190, 190, 0);
    $pdf->SetTextColor(255);
    $pdf->setDrawColor(128, 0, 0);

    // Add header columns
    foreach ($Header as $Kolom){
        $pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, 0, $Kolom['align'], true);
    }
    $pdf->Ln();

    // Set up the data styling
    $pdf->SetFillColor(244, 235, 255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('arial', '', '10');
    $fill = false;

    // Add data rows
    foreach ($Data as $Baris){
        $i = 0;
        foreach ($Baris as $Cell){
            $pdf->Cell($Header[$i]['length'], 7, $Cell, 1, 0, $Kolom['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }

    $pdf->Output();
?>