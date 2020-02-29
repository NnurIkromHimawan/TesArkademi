<div class="container cont_form">
	<div class="proses"></div>
	<form class="form_input" method="post">
		<input type="hidden" name="menu" value="transaction">
		<input type="hidden" name="iddata" value="<?php echo $iddata ?>">
		<h1 style="font-size: 30px;">Hapus Data ?</h1>
		<div class="field is-grouped">
			<p class="control">
				<input type="submit" class="button is-primary but_kuning" value="Hapus">
			</p>
		</div>
	</form>
</div>
<script>
	var iddata=$("input[name=iddata]").val();
	$(".form_input").validate({
		submitHandler:function(){
			$.post("form/?menu=proses_hapus_transaction&iddata="+iddata,$(".form_input").serialize(),function(data){
				$(".proses").html(data);
			});
		},
	}
	);

</script>