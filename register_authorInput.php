<?php
include('dbConfig.php');

if(isset($_POST['Seniman'])) {
    $total_id = mysqli_query($db, 'SELECT * FROM Seniman');
    $id = ($total_id->num_rows) + 1;
    $nama = $_POST['S_NAMA'];
    $email = $_POST['S_EMAIL'];
    $tlp = $_POST['S_TLP'];
    $bio = $_POST['S_BIO'];
    $password = $_POST['S_PASSWORD'];
    
    $sql = "INSERT INTO Seniman (S_ID, S_NAMA, S_EMAIL, S_TLP, S_BIO, S_PASSWORD) VALUES ($id, '$nama', '$email', '$tlp', '$bio', '$password')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: 03_grey-author.php');
    }
    else{
        header('location: profile.php');
    }
} else {
    die("Akses dilarang");
}
    ?>