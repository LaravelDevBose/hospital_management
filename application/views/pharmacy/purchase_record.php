<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card card-topline-aqua">
				<div class="card-body ">
					<form action="" id="sale_record_search">
						<div class="row">
							<div class="col-md-11">
								<div class="col-md-3" style="float: left;">
									<div class="form-group ">
										<label class="control-label">Search Type</label>
										<select class="form-control  select2" id="search_type" data-placeholder="Select a Option" >
											<option value="">Select a Option</option>
											<option value="All">All</option>
											<option value="Sup">By Supplier</option>
										</select>
									</div>
								</div>
								<div class="col-md-3" style="float: left;">
									<div class="form-group " >
										<label class="control-label">Supplier</label>
										<select class="form-control  select2" id="sup_id" data-placeholder="Select a Supplier">
											<option value="">Select a Supplier</option>
											<option value="AK">Supplier 5</option>
											<option value="AK">Supplier 4</option>
											<option value="AK">Supplier 3</option>
											<option value="AK">Supplier 2</option>
											<option value="AK">Supplier 1</option>
										</select>
									</div>
								</div>

								<div class="col-md-3" style="float: left;">
									<div class="form-group ">
										<label class="control-label">From Date</label>
										<div class="input-group date form_date " data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
											<input class="form-control input-height" size="16"  placeholder="Sales date" type="text" value="<?= date('d-m-Y')?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
								<div class="col-md-3" style="float: left;">
									<div class="form-group ">
										<label class="control-label">To Date </label>
										<div class="input-group date form_date " data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
											<input class="form-control input-height" size="16"  placeholder="Sales date" type="text" value="<?= date('d-m-Y')?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-1">
								<div class="form-group row" style="margin-top: 25px;">
									<button type="button" id="search_btn" class="btn btn-info btn-block">Search</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="purchase_record" style="display: none;" >
		<div class="col-md-12 col-sm-12">
			<div class="card card-topline-aqua">
				<div class="card-body ">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
							<tr>
								<th>Invoice No</th>
								<th> Date </th>
								<th> Supplier Id </th>
								<th> Supplier Name </th>
								<th> Discount </th>
								<th> Total </th>
								<th> Paid </th>
								<th> Due </th>
								<th> Action </th>
							</tr>
							</thead>
							<tbody>
							<tr class="odd gradeX">
								<td>P00001 </td>
								<td>10/12/18</td>
								<td>S001</td>
								<td>Arup Bose</td>
								<td>0</td>
								<td>3000</td>
								<td>3000</td>
								<td>0</td>
								<td>
									<a href="#" class="btn btn-info btn-xs">
										<i class="fa fa-print "></i>
									</a>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td style="text-align: right; font-weight: bold; font-size: 14px;">Total Sale</td>
								<td colspan="2"><span style="text-align: right; font-weight: bold; font-size: 14px;">100</span></td>
								<td style="text-align: right; font-weight: bold; font-size: 14px;">Total Paid</td>
								<td colspan="2"><span style="text-align: right; font-weight: bold; font-size: 14px;">80</span></td>
								<td  style="text-align: right; font-weight: bold; font-size: 14px;">Total Due</td>
								<td colspan="2"><span style="text-align: right; font-weight: bold; font-size: 14px;">20</span></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#search_btn').click(function() {

			var type = $('#search_type').val();


			$('#purchase_record').hide();


			if(type == ''){
				alert('Select a Search Type');
			}else if(type == 'All'){
				$('#purchase_record').show();
			}else if(type == 'Sup'){

				var sup_id = $('#sup_id').val();
				if(sup_id == ''){
					alert('Select A Supplier');
					return false;
				}else{
					$('#purchase_record').show();
				}
			}else{
				return;
			}
		});
	});
</script>
