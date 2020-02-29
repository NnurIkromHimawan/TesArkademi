<?php 
$menu=$_POST['menu'];
$cashier=$_POST['id_cashier'];
$product=$_POST['product'];
$id_category=$_POST['id_category'];
$price=$_POST['price'];

$input=$db->query("insert into product(name, price, id_category, id_cashier) values('$product','$price', '$id_category','$cashier')");
if ($input) {
	?>
	<script>
		load_data('<?php echo $menu; ?>');
		$(".inputdata").dialog("destroy");
		hapus_element(".inputdata");
		input_data("",400,400,"alert_input","<?php echo $cashier ?>",".batal");
	</script>
	<?php
}

?>