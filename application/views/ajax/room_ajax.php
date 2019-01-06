<script>
	$(document).ready(function(){
		$('#room_submit').click(function(e){
			e.preventDefault();

			var room_name = $('#room_name').val();
			if(room_name == '' || room_name.length == 0){
				alert('Enter the room name or Bed name');
				return false;
			}
			$.ajax({
				url:'<?= base_url()?>room_store',
				type:'POST',
				dataType:'html',
				data:$('#room_store_form').serialize(),
				success:function(data) {
					if(data != 0){
						$('#tbody').empty();
						$('#tbody').html(data);
						sweetAlertMessage('Success', 'Store Successful.!', 'success');
					}else{
						sweetAlertMessage('Ops..', 'Store Un-successful', 'error');
					}
				},error:function(error) {
					console.log(error);
					sweetAlertMessage('Ops..', 'Store Un-successful', 'error');
				}

			});
		});
	});
	

</script>
