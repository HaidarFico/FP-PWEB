<?php
include("dbConfig.php");


$tableName=['transaksi AS t', 'jasa_karya AS jk'];
$columns= ['t.T_ID', 't.T_STATUS','t.T_TGL','t.Pelanggan_P_ID','jk.Jasa_Karya_JK_ID'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
// $query = "SELECT ".$columnName." FROM $tableName"."WHERE t ORDER BY id DESC";
$query = "SELECT t.T_ID, t.T_STATUS, t.T_TGL, jk.JK_JUDUL, t.Jasa_Karya_JK_ID, t.Pelanggan_P_ID   FROM transaksi AS T, jasa_karya AS jk, pelanggan AS p WHERE t.Jasa_Karya_JK_ID = jk.JK_ID AND P.P_ID = T.Pelanggan_P_ID ORDER BY jk.JK_ID DESC";
// $query = "SELECT t.T_STATUS, t.T_TGL, jk.Jasa_Karya_ID FROM transaksi AS T, jasa_karya AS jk, pelanggan AS p WHERE t.Jasa_Karya_JK_ID = jk.JK_ID ORDER BY jk.JK_ID DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>
