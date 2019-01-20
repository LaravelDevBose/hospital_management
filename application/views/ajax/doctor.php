<script type="text/javascript">

	$('#doctor_submit').click(function(e){

		e.preventDefault();

		var doc_name = $('#doc_name').val();
		var doc_phone = $('#doc_phone').val();
		var dept_id = $('#dept_id').val();
		var desg_id = $('#desg_id').val();
		var doc_gender = $('#doc_gender').val();
		var doc_address = $('#doc_address').val();

		if(doc_name == ''|| doc_name == 0){
			alert('Enter Doctor name');
			return false;
		}
		if(doc_phone == ''|| doc_phone == 0){
			alert('Enter Doctor Phone No.');
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
		if(doc_gender == ''|| doc_gender == 0){
			alert('Select Gender');
			return false;
		}

		if(doc_address == ''|| doc_address == 0){
			alert('Enter Doctor Address');
			return false;
		}

		$.ajax({
			url:'<?= base_url()?>doctor_store',
			type:'POST',
			dataType: 'html',
			data:$('#doctor_entry').serialize(),
			success:function(data){
				if(data != 0){
					$('#tbody').empty();
					$('#tbody').html(data);
					sweetAlertMessage('Success', 'Store Successful.!', 'success');
					$('#doctor_entry')[0].reset();
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