<?php 
$getdata=$db->query("select * from cashier where id=$iddata");
$data=$getdata->fetch_array();
 ?>
 <h1 class="text_alert">Data <?php echo "$data[name]"; ?></h1>
 <div class="berhasil">
 	<i class="fas fa-check-circle"></i>
 </div>
 <h1 class="text_alert">Berhasli Diinput!</h1>
