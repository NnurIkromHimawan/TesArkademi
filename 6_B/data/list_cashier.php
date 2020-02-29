<?php
header("Content-type:application/x-javascript");
include "../lib/koneksi.php";
$term=$_GET['term'];
$getdata=$db->query("select * from cashier where name like '%$term%'");
while ($data=$getdata->fetch_array()) {
  $output[]=array(
    "cashier"=>$data['name'],
    "id_cashier"=>$data['id'],
  );
}
echo json_encode($output);

 ?>
