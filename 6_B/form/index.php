<?php 
require_once '../lib/koneksi.php';
$menu=$_GET['menu'];
$iddata=$_GET['iddata'];
if ($menu) {
	include "../form/$menu.php";
}
 ?>