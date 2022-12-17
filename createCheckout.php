<?php
include('dbConfig.php');
// require('fpdf/fpdf.php');
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
?>