<?php
$server = "localhost";
$user = "pweb_admin";
$password = "admin123";
$nama_database = "fp_pweb";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>