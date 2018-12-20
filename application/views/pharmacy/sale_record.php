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
											<option value="SI">Sale Record By Invoice</option>
											<option value="Cus">By Customer</option>
										</select>
									</div>
								</div>
								<div class="col-md-3" style="float: left;">
									<div class="form-group " >
										<label class="control-label">Customer</label>
										<select class="form-control  select2" id="cus_id" data-placeholder="Select a Customer">
											<option value="">Select a Category</option>
											<option value="AK">Customer 5</option>
											<option value="AK">Customer 4</option>
											<option value="AK">Customer 3</option>
											<option value="AK">Customer 2</option>
											<option value="AK">Customer 1</option>
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
	<div class="row" id="sale_record_all" style="display: none;" >
		<div class="col-md-12 col-sm-12">
			<div class="card card-topline-aqua">
				<div class="card-body ">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
							<tr>
								<th>Invoice No</th>
								<th> Date </th>
								<th> Customer Id </th>
								<th> Customer Name </th>
								<th> Pro Code </th>
								<th> Qty </th>
								<th> Total </th>
								<th> Action </th>
							</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td>S00001 </td>
									<td>10/12/18</td>
									<td>C001</td>
									<td>Arup Bose</td>
									<td>P0005</td>
									<td>3</td>
									<td>100</td>
									<td>
										<a href="#" class="btn btn-info btn-xs">
											<i class="fa fa-print "></i>
										</a>
									</td>
								</tr>
								<tr class="odd gradeX">
									<td style="text-align: right; font-weight: bold; font-size: 14px;">Total Sale</td>
									<td><span style="text-align: right; font-weight: bold; font-size: 14px;">100</span></td>
									<td style="text-align: right; font-weight: bold; font-size: 14px;">Total Paid</td>
									<td><span style="text-align: right; font-weight: bold; font-size: 14px;">80</span></td>
									<td style="text-align: right; font-weight: bold; font-size: 14px;">Total Due</td>
									<td colspan="3"><span style="text-align: right; font-weight: bold; font-size: 14px;">20</span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row" id="invoice_record" style="display: none;">
		<div class="col-md-12 col-sm-12">
			<div class="card card-topline-aqua">
				<div class="card-body ">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
							<tr>
								<th>Invoice No</th>
								<th> Date </th>
								<th> Customer Name </th>
								<th> Pro Code </th>
								<th> Qty </th>
								<th colspan="2"> Total Amount</th>
							</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td>S00001 </td>
									<td>10/12/18</td>
									<td>Arup Bose</td>
									<td>P0005</td>
									<td>3</td>
									<td colspan="2" style="text-align: right;">100</td>
								</tr>
								<tr class="odd gradeX">
									<td colspan="4"></td>
									<td style="text-align: right; font-weight: bold; font-size: 14px;">Total Quantity: <span >3</span> </td>
									<td style="text-align: center; font-weight: bold; font-size: 14px;"><span>Total Paid: 100 <br>Total Due: 0.00</span></td>
									<td style="text-align: right; font-weight: bold; font-size: 14px;" colspan="2"><span>Total: <span>100</span></span></td>
								</tr>
								<tr class="odd gradeX">
									<td>S00001 </td>
									<td>10/12/18</td>
									<td>Arup Bose</td>
									<td>P0005</td>
									<td>3</td>
									<td colspan="2" style="text-align: right;">100</td>
								</tr>
								<tr class="odd gradeX">
									<td colspan="4"></td>
									<td style="text-align: right; font-weight: bold; font-size: 14px;">Total Quantity: <span >3</span> </td>
									<td style="text-align: center; font-weight: bold; font-size: 14px;"><span>Total Paid: 100 <br>Total Due: 0.00</span></td>
									<td style="text-align: right; font-weight: bold; font-size: 14px;" colspan="2"><span>Total: <span>100</span></span></td>
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


			$('#sale_record_all').hide();
			$('#invoice_record').hide();


			if(type == ''){
				alert('Select a Search Type');
			}else if(type == 'SI'){
				$('#invoice_record').show();
			}else if(type == 'All'){
				$('#sale_record_all').show();
			}else if(type == 'Cus'){

				var cus_id = $('#cus_id').val();
				if(cus_id == ''){
					alert('Select A Customer');
					return false;
				}else{
					$('#sale_record_all').show();
				}
			}else{
				return;
			}
		});
	});
</script>
