<!DOCTYPE html>
<html lang=""en">
<head>
   <meta charset="UTF-8"> 
   <meta http-equiv=""X-UA-Compatible" content=""IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title> LAPORAN </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
    .container{ width: 100%; margin-top: 100px;}
</style>
</head>
<body>
<div class="container">
        <div class="from-group">
            <h2 class="alert alert-info text-center">
                SILAHKAN CEK SPREADSHEET
            </h2>
            <a href="formdaftar.php"> Isi Data Kembali </a>
        </div>
<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Id Pendaftaran');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'Email');
$sheet->setCellValue('E1', 'No Telepon');
$sheet->setCellValue('F1', 'Alamat');
$sheet->setCellValue('G1', 'Kota');
$sheet->setCellValue('H1', 'Provinsi');
$sheet->setCellValue('I1', 'Asal Sekolah');
$sheet->setCellValue('J1', 'Tahun Lulus');
$sheet->setCellValue('K1', 'Nama Orang Tua');
$sheet->setCellValue('L1', 'Pekerjaan Orang Tua');
$sheet->setCellValue('M1', 'No Telepon Orang Tua');
 
$query = mysqli_query($koneksi,"select * from pendaftaran");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['jkel']);
	$sheet->setCellValue('D'.$i, $row['email']);	
    $sheet->setCellValue('E'.$i, $row['telp']);
    $sheet->setCellValue('F'.$i, $row['alamat']);	
    $sheet->setCellValue('G'.$i, $row['kota']);
    $sheet->setCellValue('H'.$i, $row['prov']);	
    $sheet->setCellValue('I'.$i, $row['sekolah']);	
    $sheet->setCellValue('J'.$i, $row['lulus']);	
    $sheet->setCellValue('K'.$i, $row['ortu']);	
    $sheet->setCellValue('L'.$i, $row['pekerjaan']);	
    $sheet->setCellValue('M'.$i, $row['telportu']);			
	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:M'.$i)->applyFromArray($styleArray);
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Report Pendaftaran Siswa Baru.xlsx');

?>
</body>
</html>