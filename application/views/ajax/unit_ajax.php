<script>
	$(document).ready(function(){
		$('#unit_submit').click(function(e){
			e.preventDefault();
			var unit_name = $('#unit_name').val();
			if(unit_name ==''|| unit_name.length ===0){
				alert('Unit Name Is Required');
				$('#unit_name').focus();
				return false;
			}

			$.ajax({
				url:'<?= base_url()?>unit_store',
				type:'POST',
				dataType:'html',
				data:{unit_name:unit_name},
				success:function(data){
					if(data != 0){
						$('#unit_name').val('');
						$('#tbody').empty();
						$('#tbody').html(data);
						sweetAlertMessage('Success', 'Store Successful.!', 'success');

					}else{
						sweetAlertMessage('Ops..', 'Store Un-successful', 'error');
					}
				},error:function(error){
					console.log(error);
					sweetAlertMessage('Error', 'Store Un-successful', 'error');
				}
			});
		});
	});
</script>
