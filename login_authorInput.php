<?php
    include('dbconfig.php');
    if(isset($_POST['contactForm'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM seniman WHERE S_EMAIL = '$email' AND S_PASSWORD = '$password'";
        $query = mysqli_query($db, $sql);
        if ($query->num_rows == 1) {
            $removestatus = "DELETE FROM token WHERE ID_Token = 1";
            $secondQuery = mysqli_query($db, $removestatus);
            $senimanID = $query->fetch_row();
            $addStatus = "INSERT INTO token (ID_Token,  Seniman_S_ID ) VALUES (1, $senimanID[0])";
            $thirdQuery = mysqli_query($db, $addStatus);
            if($thirdQuery){
                header('location: profile.php');
            }
            else{
                header('location: 03_grey-loginauthor.php');
            }
        }
        else{
            header('location: 03_grey-loginauthor.php');
        }
    } else {
        die("Akses dilarang");
    }
?>