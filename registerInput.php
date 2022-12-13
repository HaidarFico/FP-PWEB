<?php
include('dbConfig.php');
include('constraintsChecker.php');
if(isset($_POST['Pelanggan'])) {
    $total_id = mysqli_query($db, 'SELECT * FROM pelanggan');
    $id = ($total_id->num_rows) + 1;
    $nama = $_POST['P_NAMA'];
    $email = $_POST['P_EMAIL'];
    $tlp = $_POST['P_TLP'];
    $bio = $_POST['P_BIO'];
    $password = $_POST['P_PASSWORD'];
    if(!isPasswordValid($password)){
        die('invalid password');     
    }
    if(!isNameValid($nama)){
        die('invalid name');     
    }
    if(!isEmailValid($email)){
        die('invalid email');
    }
    if(!isPasswordValid($password)){
        die('invalid password');
    }
    if(!isTelephoneValid($tlp)){
        die('invalid phone number');
    }

    $sql = "INSERT INTO pelanggan (P_ID, P_NAMA, P_EMAIL, P_TLP, P_BIO, P_PASSWORD) VALUES ($id, '$nama', '$email', '$tlp', '$bio', '$password')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: 03_grey-login.php');
    }
    else{
        header('location: index.php');
    }
} else {
    die("Akses dilarang");
}
    ?>