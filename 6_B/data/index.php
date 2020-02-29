<?php 
require_once '../lib/koneksi.php';
$menu=$_GET['menu'];
if ($menu) {
	include "../data/$menu.php";
}
 ?>