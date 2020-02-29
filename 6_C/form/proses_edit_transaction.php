<?php 
$menu=$_POST['menu'];
$iddata=$_POST['iddata'];
$cashier=$_POST['id_cashier'];
$product=$_POST['product'];
$id_category=$_POST['id_category'];
$price=$_POST['price'];


// $input=$db->query("insert into product(name, price, id_category, id_cashier) values('$product','$price', '$id_category','$cashier')");
$input=$db->query("update product set id_cashier='$cashier', name='$product', id_category='$id_category', price='$price' where id='$iddata'");
if ($input) {
	?>
	<script>
		load_data('<?php echo $menu; ?>');
		$(".inputdata").dialog("destroy");
		hapus_element(".inputdata");
		input_data("",400,400,"alert_edit","<?php echo $cashier ?>",".batal");
	</script>
	<?php
}

?>
