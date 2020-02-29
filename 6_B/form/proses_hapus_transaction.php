<?php 
$menu=$_POST['menu'];
$iddata=$_POST['iddata'];


$input=$db->query("delete from product where id='$iddata'");
if ($input) {
	?>
	<script>
		load_data('<?php echo $menu; ?>');
		$(".inputdata").dialog("destroy");
		hapus_element(".inputdata");
		input_data("",400,400,"alert_hapus","<?php echo $iddata ?>",".batal");
	</script>
	<?php
}

?>
