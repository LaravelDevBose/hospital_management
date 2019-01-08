<script>
	$(document).ready(function(){
		$('#test_submit').click(function(e){
			e.preventDefault();

			var test_name = $('#test_name').val();

			if(test_name == '' || test_name.length === 0){
				alert('Test Name Field is Required..');
				return false;
			}

			$.ajax({
				url:'<?= base_url()?>test_store',
				type:'POST',
				dataType:'html',
				data:$('#test_store_form').serialize(),
				success:function(data){
					if(data != 0){
						$('#test_name').val('');
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
