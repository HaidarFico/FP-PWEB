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
    $foto = $_FILES['P_FOTO']['name'];
    $tmp = $_FILES['P_FOTO']['tmp_name'];
    $filePath = './uploadedImages/' . $foto;
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
    if (move_uploaded_file($tmp, $filePath) == false){
        // Failed to move photo
        echo ('this is $foto'.$foto.'<br>');
        echo ('this is $tmp'.$tmp.'<br>');
        echo ('this is $filePath'.$filePath.'<br>');
        die('failed to move photo<br>'. $foto .'<br>'.$tmp.'<br>'.$filePath);
    }
    $sql = "INSERT INTO pelanggan (P_ID, P_NAMA, P_EMAIL, P_TLP, P_BIO, P_PASSWORD, P_FOTO) VALUES ($id, '$nama', '$email', '$tlp', '$bio', '$password', '$foto')";
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