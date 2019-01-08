<script>
	$(document).ready(function(){
		$('#month_submit').click(function(e){
			e.preventDefault();

			var month_name = $('#month_name').val();
			var year = $('#year').val();

			if(month_name == '' || month_name == 0){
				alert('Select a month name');
				return false;
			}

			if(year == '' || year.length === 0){
				alert('Enter Salary Year..');
				return false;
			}

			$.ajax({
				url:'<?= base_url()?>salary_month_store',
				type:'POST',
				dataType:'html',
				data:$('#salary_month_store').serialize(),
				success:function(data){

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

		$('#month_update').click(function(){
			var month_name = $('#e_month_name').val();
			var year = $('#e_year').val();

			if(month_name == '' || month_name == 0){
				alert('Select a month name');
				return false;
			}

			if(year == '' || year.length === 0){
				alert('Enter Salary Year..');
				return false;
			}
		});
	});

</script>
