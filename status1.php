<?php
include("developers.php");
?>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="spacer-10">
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>ID</th>
         <th>Status</th>
         <th>Tanggal</th>
         <th>ID Pelanggan</th>
         <th>ID Karya</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['T_ID']??''; ?></td>
      <td><?php echo $data['T_STATUS']??''; ?></td>
      <td><?php echo $data['T_TGL']??''; ?></td>
      <td><?php echo $data['Pelanggan_P_ID']??''; ?></td>
      <td><?php echo $data['Jasa_Karya_JK_ID']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
    </div>
    
</div>
</div>
</div>
</body>
</html>