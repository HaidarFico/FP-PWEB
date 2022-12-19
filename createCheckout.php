<?php
include('dbConfig.php');
require('./fpdf/fpdf.php');
$firstQuery = "SELECT p.P_PASSWORD, tk.Pelanggan_P_ID FROM Pelanggan p, Token tk WHERE p.P_ID = tk.Pelanggan_P_ID";
$queryResult = mysqli_query($db, $firstQuery);
$passwordAndTokenFromDB = $queryResult->fetch_assoc();
// Check for password
if(strcmp($passwordAndTokenFromDB['P_PASSWORD'], $_POST['password']) != 0){
    header('location: checkout.php');
}
$secondQuery = "SELECT t.T_ID, p.P_NAMA, t.T_STATUS, jk.JK_ID, jk.JK_JUDUL, jk.JK_HARGA FROM Pelanggan p, Transaksi t, Jasa_Karya jk, Token tk WHERE p.P_ID = ".$passwordAndTokenFromDB['Pelanggan_P_ID']." AND t.Pelanggan_P_ID = p.P_ID AND jk.JK_ID = t.Jasa_Karya_JK_ID";
// DEBUG
// echo ($secondQuery);
$secondQueryResult = mysqli_query($db, $secondQuery);
$secondQueryRow = $secondQueryResult->fetch_array();
// DEBUG
// for($x = 0; $x < 6; $x++){
//     echo ($secondQueryRow[$x]."<br>");
// }
// Start create PDF
$pdf = new FPDF('l','mm','A5');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'Struk Checkout',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'ID', 1, 0);
$pdf->Cell(30,6,'Nama Pelanggan',1,0);
$pdf->Cell(50,6,'Judul Karya',1,0);
$pdf->Cell(50,6,'Harga Karya',1,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(20,6,$secondQueryRow['T_ID'],1,0);
$pdf->Cell(30,6,$secondQueryRow['P_NAMA'],1,0);
$pdf->Cell(50,6,$secondQueryRow['JK_JUDUL'],1,0); 
$pdf->Cell(50,6,$secondQueryRow['JK_HARGA'],1,0); 

$pdf->Output();
?>