<?php
include('dbconfig.php');
// print($db);
$sql = "INSERT INTO Seniman VALUES (1, '2a', '$2', '2d', '3b', '2p2')";
$sql = "INSERT INTO Admin VALUES (1, 'elfofsef', 'testemail', '012312', 'fewijfweijf')";


$query = mysqli_query($db, $sql);

?>