<?php
include('dbConfig.php');
$logoutQuery = "DELETE FROM Token WHERE ID_Token = 1";
mysqli_query($db, $logoutQuery);
header('location: 03_grey-login.php');  
?>