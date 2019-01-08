<script>
	$(document).ready(function(){
		$('#deig_submit').click(function(e){
			e.preventDefault();
			var desg_name = $('#desg_name').val();
			if(desg_name ==''|| desg_name.length ===0){
				alert('Designation Title Is Required');
				$('#desg_name').focus();
				return false;
			}

			$.ajax({
				url:'<?= base_url()?>designation_store',
				type:'POST',
				dataType:'html',
				data:$('#desg_form').serialize(),
				success:function(data){
					if(data != 0){
						$('#desg_name').val('');
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
