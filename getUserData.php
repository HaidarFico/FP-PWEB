<?php
    function getData(){
        include('dbconfig.php');
        $tokenQuery = "SELECT * FROM token WHERE ID_TOKEN = 1";
        $query = mysqli_query($db, $tokenQuery);
        $firstRow = $query->fetch_row();
        $pelangganID = $firstRow[1];
        $senimanID = $firstRow[2];
        if($senimanID == null){
            // Ini berarti pelanggan lagi logged in
            $selectData = "SELECT * FROM pelanggan WHERE P_ID = $pelangganID";
            $secondQuery = mysqli_query($db, $selectData);
            $secondQueryFirstRow = $secondQuery->fetch_row();
            return $secondQueryFirstRow;
        }
        if($pelangganID == null){
            // Ini berarti seniman lagi logged in
            $selectData = "SELECT * FROM seniman WHERE S_ID = $senimanID";
            $secondQuery = mysqli_query($db, $selectData);
            $secondQueryFirstRow = $secondQuery->fetch_row();
            return $secondQueryFirstRow;
        }

    }
?>