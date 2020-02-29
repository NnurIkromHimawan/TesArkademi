<div class="container cont_form">
	<div class="proses"></div>
	<form class="form_input" method="post">
		<input type="hidden" name="menu" value="transaction">
		<div class="field">
			<label class="label">Casier</label>
			<div class="control">
				<input class="input" type="text" name="cashier" placeholder="Cashier">
				<input type="hidden" name="id_cashier">
			</div>
		</div>
		<div class="field">
			<label class="label">Category</label>
			<div class="control">
				<div class="select">
					<select name="id_category">
						<?php 
						$getdata=$db->query("select * from category");
						while ($data=$getdata->fetch_array()) {
							?>
							<option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>
							<?php	
						}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="field">
			<label class="label">Product</label>
			<div class="control">
				<input class="input" type="text" name="product" placeholder="Product">
			</div>
		</div>
		<div class="field">
			<label class="label">Price</label>
			<div class="control">
				<input class="input" type="text" name="price" placeholder="Price">
			</div>
		</div>
		<div class="field is-grouped">
			<p class="control">
				<input type="submit" class="button is-primary but_kuning" value="Save">
			</p>
		</div>
	</form>
</div>
<script>
	$("input[type=text]").attr("autocomplete","off");
	$("input[name=cashier]").focus();
	$("input[name=cashier]").autocomplete({
		source:function(request,response){
			$.ajax({
				url:"data/list_cashier.php",
				dataType:"json",
				data:{term:request.term},
				success:function(data){
					response($.map(data,function(item){
						return{
							label:item.cashier,
							id_cashier:item.id_cashier,

						}
					}))
				}
			})
		},
		delay:0,
		select:function(event,ui){
			$("input[name=id_cashier]").val(ui.item.id_cashier);
			$("input[name=product]").focus();
		},
	});
	$(".form_input").validate({
		submitHandler:function(){
			$.post("form/?menu=proses_input_transaction",$(".form_input").serialize(),function(data){
				$(".proses").html(data)
			});
		},
	}
	);

</script>