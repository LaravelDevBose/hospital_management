<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card card-topline-aqua">
				<div class="card-body ">
					<form action="#" id="sale_return_search" class="form-horizontal">
						<div class="row">

							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="text-align: right;">Invoice Id</label>
									<div class="col-md-8">
										<select class="form-control  select2" id="invoice_id" data-placeholder="Select a Invoice" onchange="search_type_toggle($(this).val());">
											<option value="">Select a Invoice</option>
											<option value="6">C00006</option>
											<option value="5">C00005</option>
											<option value="4">C00004</option>
											<option value="3">C00003</option>
											<option value="2">C00002</option>
											<option value="1">C00001</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Sale Date </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
											<input class="form-control input-height" size="16"  placeholder="Sales date" type="text" value="<?= date('d-m-Y')?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group row">
									<button type="submit" class="btn btn-info btn-block">Search</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row" id="return_table" style="display: none">
		<div class="col-md-12 col-sm-12">
			<div class="card card-topline-aqua">
				<div class="card-body ">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
							<tr>
								<th># ID</th>
								<th> Product Name </th>
								<th> Total Qry </th>
								<th> Total Amount </th>
								<th> Already Return Qty </th>
								<th> Already Return Amount </th>
								<th> Return Qty </th>
								<th> Return Amount </th>
							</tr>
							</thead>
							<tbody>
							<tr class="odd gradeX">
								<td>P00001 </td>
								<td>Napa Extra</td>
								<td>10</td>
								<td>18</td>
								<td><input type="number" class="form-control" readonly value="2" /></td>
								<td><input type="number" class="form-control" readonly value="5" /></td>
								<td><input type="number" class="form-control" /></td>
								<td><input type="number" class="form-control" /></td>
							</tr>
							<tr class="odd gradeX">
								<td class="patient-img" colspan="3" style="text-align: right; font-weight: bold; font-size: 14px;">Note</td>
								<td colspan="3"><textarea name="" id="" rows="2" class="form-control"></textarea></td>
								<td colspan="2"><button type="submit" class="btn btn-lg btn-success">Save</button></td>
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
	$(document).ready(function (){
		$('#sale_return_search').submit(function(){
			var invoice_id = $('#invoice_id').val();
			if(invoice_id === ''){
				alert('Select a Invoice Number');
				return false;
			}
			$('#return_table').show();
			return false;
		});
	});
</script>
