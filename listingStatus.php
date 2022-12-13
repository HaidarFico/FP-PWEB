<?php
function getTable(){
    include('dbconfig.php');
    $queryMsg = 'SELECT t.T_STATUS, t.T_TGL, jk.JK_JUDUL FROM transaksi AS T, jasa_karya AS jk WHERE t.Jasa_Karya_JK_ID = jk.JK_ID';
    $query = mysqli_query($db, $query);
    $queryRows = $query->fetch_array(MYSQLI_NUM);
    return $queryRows;
};

?>