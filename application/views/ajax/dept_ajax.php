<script>
	$(document).ready(function(){
		$('#dept_submit').click(function(e){
			e.preventDefault();
			var dept_name = $('#dept_name').val();
			if(dept_name ==''|| dept_name.length ===0){
				alert('Department Name Is Required');
				$('#dept_name').focus();
				return false;
			}

			$.ajax({
				url:'<?= base_url()?>department_store',
				type:'POST',
				dataType:'html',
				data:$('#dept_form').serialize(),
				success:function(data){
					if(data != 0){
						$('#dept_name').val('');
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
