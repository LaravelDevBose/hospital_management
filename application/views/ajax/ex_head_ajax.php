<script>
	$(document).ready(function(){
		$('#eh_submit').click(function(e){
			e.preventDefault();

			var eh_name = $('#eh_name').val();
			if(eh_name == '' || eh_name.length ===0){
				alert('Expense Head Title is Required');
				$('#eh_name').focus();
				return false;
			}
			$.ajax({
				url:'<?= base_url()?>expense_head_store',
				type:'POST',
				dataType:'html',
				data:$('#eh_insert').serialize(),
				success:function(data){

					if(data != 0){
						$('#tbody').empty();
						$('#tbody').html(data);
						$('#eh_name').val('');
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
