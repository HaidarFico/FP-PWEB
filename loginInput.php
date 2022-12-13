<?php
    include('dbconfig.php');
    if(isset($_POST['contactForm'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM pelanggan WHERE P_EMAIL = '$email' AND P_PASSWORD = '$password'";
        $query = mysqli_query($db, $sql);
        if ($query->num_rows == 1) {
            $removestatus = "DELETE FROM token WHERE ID_Token = 1";
            $secondQuery = mysqli_query($db, $removestatus);
            $pelangganID = $query->fetch_row();
            $addStatus = "INSERT INTO token (ID_Token,  Pelanggan_P_ID) VALUES (1, $pelangganID[0])";
            $thirdQuery = mysqli_query($db, $addStatus);
            if($thirdQuery){
                header('location: profile.php');
            }
            else{
                header('location: 03_grey-login.php');
            }
        }
        else{
            header('location: 03_grey-login.php');
        }
    } else {
        die("Akses dilarang");
    }
?>