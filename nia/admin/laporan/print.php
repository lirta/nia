<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // Arial bold 15
    $this->SetFont('Arial','B',25);
    // Move to the right
    $this->Cell(100);
    // Title
    $this->Cell(70,10,'PPAT RIKY ASFAJRI',0,0,'C');
    // Line break
    $this->Ln(10);
    $this->Cell(80);


    $this->SetFont('Arial','B',15);
    $this->Cell(100,10,'LAPORAN BULANAN',0,0,'C');
    $this->Ln(10);
    $this->Cell(80);

    //$this->Cell(110,10,'Laporan Data Pendidikan',0,0,'C');


    $this->Ln(25);
    



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
// Instanciation of inherited class
$pdf = new PDF('L','mm','A3');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',8);

$pdf->Cell(10,7,'No.',1,0,'C');
$pdf->Cell(20,7,'Tgl Laporan',1,0,'C');
$pdf->Cell(20,7,'No Akta',1,0,'C');
$pdf->Cell(20,7,'Tgl Akta',1,0,'C');
$pdf->Cell(20,7,'Bentuk Hukum',1,0,'C');
$pdf->Cell(20,7,'Nama Penjual',1,0,'C');
$pdf->Cell(20,7,'Nama Pembeli',1,0,'C');
$pdf->Cell(20,7,'No Sertifikat',1,0,'C');
$pdf->Cell(20,7,'Alamat Tanah',1,0,'C');
$pdf->Cell(20,7,'Luas Tanah',1,0,'C');
$pdf->Cell(20,7,'Luas Bangunan',1,0,'C');
$pdf->Cell(20,7,'Harga Peralihan Hak',1,0,'C');
$pdf->Cell(20,7,'Nop Tahun',1,0,'C');
$pdf->Cell(20,7,'NJOP',1,0,'C');
$pdf->Cell(20,7,'Tgl SSP',1,0,'C');
$pdf->Cell(20,7,'H SSP',1,0,'C');
$pdf->Cell(20,7,'Tgl SSB',1,0,'C');
$pdf->Cell(20,7,'H SSB',1,0,'C');
$pdf->Cell(20,7,'Keterangan',1,0,'C');

$pdf->Ln();


include "../../pages/coneksi/config.php";
 $no = 1;
  $queri ="SELECT * FROM laporan";
    $kolom =mysqli_query($koneksi,$queri);
    while ($hasil=mysqli_fetch_assoc($kolom)) {
    $pdf->SetFont('Times','B',8);
    $pdf->Cell(10,7,$no++,1,0,'l');
    $pdf->Cell(20,7,$hasil['tgl_laporan'],1,0,'L');
    $pdf->Cell(20,7,$hasil['no_akta'],1,0,'L');
    $pdf->Cell(20,7,$hasil['tgl_akta'],1,0,'L');
    $pdf->Cell(20,7,$hasil['bentuk_hukum'],1,0,'L');
    $pdf->Cell(20,7,$hasil['nama_penjual'],1,0,'L');
    $pdf->Cell(20,7,$hasil['nama_pembeli'],1,0,'L');
    $pdf->Cell(20,7,$hasil['no_sertifikat'],1,0,'L');
    $pdf->Cell(20,7,$hasil['alamat_tanah'],1,0,'L');
    $pdf->Cell(20,7,$hasil['luas_tanah'],1,0,'L');
    $pdf->Cell(20,7,$hasil['luas_bangunan'],1,0,'L');
    $pdf->Cell(20,7,$hasil['harga_peralihan_hak'],1,0,'L');
    $pdf->Cell(20,7,$hasil['nop_tahun'],1,0,'L');
    $pdf->Cell(20,7,$hasil['njop'],1,0,'L');
    $pdf->Cell(20,7,$hasil['tgl_ssp'],1,0,'L');
    $pdf->Cell(20,7,$hasil['h_ssp'],1,0,'L');
    $pdf->Cell(20,7,$hasil['tgl_ssb'],1,0,'L');
    $pdf->Cell(20,7,$hasil['h_ssb'],1,0,'L');
    $pdf->Cell(20,7,$hasil['keterangan'],1,0,'L');
    $pdf->Ln();
  }

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times','',11);


$pdf->Output();
?>