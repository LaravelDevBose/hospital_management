<script>
	$(document).ready(function(){
		$('#brand_submit').click(function(e){
			e.preventDefault();
			var brand_name = $('#brand_name').val();
			if(brand_name ==''|| brand_name.length ===0){
				alert('Department Name Is Required');
				$('#brand_name').focus();
				return false;
			}
			$.ajax({
				url:'<?= base_url()?>brand_store',
				type:'POST',
				dataType:'html',
				data:$('#brand_form').serialize(),
				success:function(data){
					if(data != 0){
						$('#brand_name').val('');
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
