<script type="text/javascript">

	$('#stuff_submit').click(function(e){

		e.preventDefault();

		var stuff_name = $('#stuff_name').val();
		var stuff_phone = $('#stuff_phone').val();
		var dept_id = $('#dept_id').val();
		var desg_id = $('#desg_id').val();
		var stuff_gender = $('#stuff_gender').val();
		var stuff_address = $('#stuff_address').val();

		if(stuff_name == ''|| stuff_name == 0){
			alert('Enter Stuff name');
			return false;
		}
		if(stuff_phone == ''|| stuff_phone == 0){
			alert('Enter Stuff Phone No.');
			return false;
		}
		if(dept_id == ''|| dept_id == 0){
			alert('Select Department');
			return false;
		}
		if(desg_id == ''|| desg_id == 0){
			alert('Select Designation');
			return false;
		}
		if(stuff_gender == ''|| stuff_gender == 0){
			alert('Select Gender');
			return false;
		}

		if(stuff_address == ''|| stuff_address == 0){
			alert('Enter Stuff Address');
			return false;
		}

		$.ajax({
			url:'<?= base_url()?>stuff_store',
			type:'POST',
			dataType: 'html',
			data:$('#stuff_form').serialize(),
			success:function(data){
				if(data != 0){
					$('#tbody').empty();
					$('#tbody').html(data);
					sweetAlertMessage('Success', 'Store Successful.!', 'success');
					$('#stuff_form')[0].reset();
				}else{
					sweetAlertMessage('Ops..', 'Store Un-successful', 'error');
				}
			},error:function(error){
				console.log(error);
				sweetAlertMessage('Ops..', 'Store Un-successful', 'error');
			}
		});
	});
</script>