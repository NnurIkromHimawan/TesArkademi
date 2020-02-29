<?php 
$getanu=$db->query("select * from product where id='$iddata'");
$anu=$getanu->fetch_array();

$getdata=$db->query("select * from cashier where id='$anu[id_cashier]'");
$data=$getdata->fetch_array();
 ?>
 <h1 class="text_alert">Data <?php echo "$data[name]"; ?></h1>
 <div class="berhasil">
 	<i class="fas fa-check-circle"></i>
 </div>
 <h1 class="text_alert">Berhasli Dihapus!</h1>
