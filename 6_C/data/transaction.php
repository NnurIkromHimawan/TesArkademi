<div class="container cont_cont">
	<table class="table is-fullwidth is-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Cashier</th>
				<th>Product</th>
				<th>Caegory</th>
				<th>Price</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$n=0;
			$getdata=$db->query("select * from product");
			while ($data=$getdata->fetch_array()) {
				$n++;
				$get_cashier=$db->query("select * from cashier where id = '$data[id_cashier]'");
				$data_cashier=$get_cashier->fetch_array();

				$get_category=$db->query("select * from category where id = '$data[id_category]'");
				$data_category=$get_category->fetch_array();
				?>
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo "$data_cashier[name]"; ?></td>
					<td><?php echo "$data[name]"; ?></td>
					<td><?php echo "$data[price]"; ?></td>
					<td><?php echo "$data_category[name]"; ?></td>
					<td>
						<a href="#" class="button is-primary is-small data_submenu edit" data-menu="edit_transaction" data-judul="Edit Transaction" data-id="<?php echo $data['id'] ?>">Edit</a> - 
						<a href="#" class="button is-danger is-small data_submenu hapus" data-menu="hapus_transaction" data-judul="Hapus Transaction" data-id="<?php echo $data['id'] ?>">Hapus</a>
					</td>
				</tr>
				<?php
			}
			?>

		</tbody>
	</table>
</div>
<script>
	$(".data_submenu").click(function(event) {
		var judul=$(this).attr("data-judul");
		var menu=$(this).attr("data-menu");
		var iddata=$(this).attr("data-id");
		var is_hapus=$(this).hasClass('hapus');
		var is_edit=$(this).hasClass("edit");
		if (is_hapus==true) {
			lebar=300;
			tinggi=230;
		}
		else if (is_edit==true) {
			lebar=450;
			tinggi=530;
		}
		else {
			lebar=450;
			tinggi=530;
		}
		input_data(judul,lebar,tinggi,menu,iddata,".batal");
	});
</script>