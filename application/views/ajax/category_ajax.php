<script>
	$(document).ready(function(){
		$('#cat_submit').click(function(e){
			e.preventDefault();
			var cat_name = $('#cat_name').val();
			if(cat_name ==''|| cat_name.length ===0){
				alert('Category Name Is Required');
				$('#cat_name').focus();
				return false;
			}

			$.ajax({
				url:'<?= base_url()?>category_store',
				type:'POST',
				dataType:'html',
				data:$('#cat_form').serialize(),
				success:function(data){
					if(data != 0){
						$('#cat_name').val('');
						$('#tbody').empty();
						$('#tbody').html(data);
						sweetAlertMessage('Success', 'Store Successful.!', 'success');

					}else{
						sweetAlertMessage('Ops..', 'Store Un-successful', 'error');
					}
				},error:function(error){
					console.log(error);
					sweetAlertMessage('Ops..', 'Store Un-successful', 'error');
				}
			});
		});
	});
</script>
